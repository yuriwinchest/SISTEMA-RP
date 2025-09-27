  //Auto Close Timer
    function sucesso(){
        $('body').removeClass('timer-alert');
        Swal.fire({
            title: 'Salvo com Sucesso!',
            text: 'Fecharei em 1 segundo.',
            icon: "success",
            timer: 1000,
            customClass: {
            container: 'swal-whatsapp-container'
        }
        })?.then(
            function () {
            },
            // lidando com a rejeição da promessa
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('Eu estava fechado pelo cronômetro')
                }
            }
        )
    }


        //Auto Close Timer
    function excluido(){
        $('body').removeClass('timer-alert');
        Swal.fire({
            title: 'Excluido com Sucesso!',
            text: 'Fecharei em 1 segundo.',
            icon: "success",
            timer: 1000,
            customClass: {
            container: 'swal-whatsapp-container'
        }
        })?.then(
            function () {
            },
            // lidando com a rejeição da promessa
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('Eu estava fechado pelo cronômetro')
                }
            }
        )
    }
    



        //Auto Close Timer
    function alertcobrar(){
        $('body').removeClass('timer-alert');
        Swal.fire({
            title: 'Cobrança Efetuada!',
            text: 'Fecharei em 1 segundo.',
            icon: "success",
            timer: 1000,
            customClass: {
            container: 'swal-whatsapp-container'
        }
        })?.then(
            function () {
            },
            // lidando com a rejeição da promessa
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('Eu estava fechado pelo cronômetro')
                }
            }
        )
    }



function baixado() {
    $('body').removeClass('timer-alert');
    Swal.fire({
        title: 'Baixa Efeturada com Sucesso!',
        text: 'Fecharei em 1 segundo.',
        icon: "success",
        timer: 2000,
        customClass: {
            container: 'swal-whatsapp-container'
        }
    })?.then(
        function () {
        },
        // lidando com a rejeição da promessa
        function (dismiss) {
            if (dismiss === 'timer') {
                console.log('Eu estava fechado pelo cronômetro')
            }
        }
    )
}


function alertWarning(mensagem) {
    $('body').removeClass('timer-alert');
    Swal.fire({
        title: 'Informação',
        text: mensagem,
        icon: "warning",
        confirmButtonText: 'OK',
         customClass: {
            container: 'swal-whatsapp-container'
        }
    })
}



function inserido(){
        $('body').removeClass('timer-alert');
        Swal.fire({
            title: 'Produto Inserido',
            text: '',
            icon: "success",
            timer: 700,
            customClass: {
            container: 'swal-whatsapp-container'
        }
        })?.then(
            function () {
            },
            // lidando com a rejeição da promessa
            function (dismiss) {
                if (dismiss === 'timer') {
                    console.log('')
                }
            }
        )
    }