
<?php
/**
 * Created by PhpStorm.
 * User: leonardobites
 * Date: 05/08/15
 * Time: 10:59
 */

include "Cliente.php";

//Carga dos objetos
$cliente1 = new Cliente();
$cliente1
    ->setNome("Leonardo")
    ->setCpf(82041407115)
    ->setEndereco("QNJ 04")
    ->setTelefone(85501505)
    ->setEmail("leonardo.bites@gmail.com");

$cliente2 = new Cliente();
$cliente2
    ->setNome("Jose")
    ->setCpf(78592145962)
    ->setEndereco("casa 1")
    ->setTelefone(1234567)
    ->setEmail("jose@gmail.com");

$cliente3 = new Cliente();
$cliente3
    ->setNome("Maria")
    ->setCpf(93251475924)
    ->setEndereco("casa 2")
    ->setTelefone(9874562)
    ->setEmail("maria@gmail.com");

$cliente4 = new Cliente();
$cliente4
    ->setNome("Cleber")
    ->setCpf(75821459354)
    ->setEndereco("casa 3")
    ->setTelefone(7859241)
    ->setEmail("cleber@gmail.com");

$cliente5 = new Cliente();
$cliente5
    ->setNome("Gorete")
    ->setCpf(7854129321)
    ->setEndereco("casa 4")
    ->setTelefone(7854129)
    ->setEmail("gorete@gmail.com");

$cliente6 = new Cliente();
$cliente6
    ->setNome("Alfredo")
    ->setCpf(95214785632)
    ->setEndereco("casa 5")
    ->setTelefone(6587459)
    ->setEmail("alfredo@gmail.com");

$cliente7 = new Cliente();
$cliente7
    ->setNome("Tadeu")
    ->setCpf(32145874596)
    ->setEndereco("casa 6")
    ->setTelefone(2547961)
    ->setEmail("tadeu@gmail.com");

$cliente8 = new Cliente();
$cliente8
    ->setNome("Milena")
    ->setCpf(35794861254)
    ->setEndereco("casa 7")
    ->setTelefone(2458791)
    ->setEmail("milena@gmail.com");

$cliente9 = new Cliente();
$cliente9
    ->setNome("Ze")
    ->setCpf(48579154786)
    ->setEndereco("casa 8")
    ->setTelefone(8574621)
    ->setEmail("ze@gmail.com");

$cliente10 = new Cliente();
$cliente10
    ->setNome("Wesley")
    ->setCpf(25478961452)
    ->setEndereco("casa 9")
    ->setTelefone(2354784)
    ->setEmail("wesley@gmail.com");

//Implementado Array de objetos
$clientes = [
    $cliente1,
    $cliente2,
    $cliente3,
    $cliente4,
    $cliente5,
    $cliente6,
    $cliente7,
    $cliente8,
    $cliente9,
    $cliente10
];

include "header.php";
?>



		<div class="container">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead><tr><th>ID</th><th>Nome</th></thead>
                <tbody>
                <?php
                    foreach ($clientes as $key=>$cliente) {
                        echo "<tr><td>" . $key . "</td><td> <a href=\"#?id=". $key."\" data-toggle=\"modal\" data-target=\"#myModal".$key."\">" . $cliente->getNome()  . "</a></td></tr>";
                        echo " <div id=\"myModal".$key."\" class=\"modal fade\" role=\"dialog\">";
                        echo '
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Dados do Cliente</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>';
                                            echo "Nome - " .$cliente->getNome() ."<br>";
                                            echo "Endereço - " .$cliente->getEndereco() ."<br>";
                                            echo "telefone - " .$cliente->getTelefone() ."<br>";
                                            echo "Email - " .$cliente->getEmail() ."<br>";
                                    echo '
                                    </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                              </div>
                              </div>';
                    }
                 ?>
                </tbody>
            </table>



		</div>

        <script type="text/javascript">
            // For demo to fit into DataTables site builder...
            $('#example')
            .removeClass( 'display' )
            .addClass('table table-striped table-bordered');
        </script>

<?php
include "footer.php";
?>
}