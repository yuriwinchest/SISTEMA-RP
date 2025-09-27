<?php
@session_start();
$id_empresa = @$_SESSION['empresa'];

$tabela = 'cargos';
require_once("../../../conexao.php");

// Parâmetros enviados pelo DataTables
$draw = isset($_POST['draw']) ? intval($_POST['draw']) : 1;
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$length = isset($_POST['length']) ? intval($_POST['length']) : 10;
$search = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';

// Filtragem e paginação
$sql = "SELECT id, nome FROM $tabela WHERE empresa = :empresa";
if (!empty($search)) {
    $sql .= " AND (nome LIKE :search)";
}
$sql .= " ORDER BY id DESC LIMIT :start, :length";

$query = $pdo->prepare($sql);
$query->bindValue(':empresa', $id_empresa, PDO::PARAM_INT);
if (!empty($search)) {
    $query->bindValue(':search', "%$search%", PDO::PARAM_STR);
}
$query->bindValue(':start', $start, PDO::PARAM_INT);
$query->bindValue(':length', $length, PDO::PARAM_INT);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// Contagem total de registros
$queryTotal = $pdo->prepare("SELECT COUNT(*) as total FROM $tabela WHERE empresa = :empresa");
$queryTotal->bindValue(':empresa', $id_empresa, PDO::PARAM_INT);
$queryTotal->execute();
$totalRecords = $queryTotal->fetch(PDO::FETCH_ASSOC)['total'];

// Preparação dos dados para DataTables
$dados = [];
foreach ($res as $row) {
    $dados[] = [
        "checkbox" => "<input type='checkbox' class='selecionar' value='{$row['id']}'>",
        "nome" => $row['nome'],
        "acoes" => "<a class='btn btn-info-light btn-sm' href='#' onclick='editar(\"{$row['id']}\", \"{$row['nome']}\")'><i class='fa fa-edit'></i></a>
                    <a class='btn btn-danger-light btn-sm' href='#' onclick='excluir(\"{$row['id']}\")'><i class='fa fa-trash'></i></a>"
    ];
}

// Retorno dos dados no formato exigido pelo DataTables
echo json_encode([
    "draw" => $draw,
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $totalRecords, // Pode ser ajustado caso haja filtragem
    "data" => $dados
]);
