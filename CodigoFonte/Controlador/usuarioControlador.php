<?php  
    include_once "./modeloDAO/usuariosDAO.php";
    include_once "./modelo/usuarios.php"; 
 
    class usuariosControlador{
        private $usuarioDAO;

        public function __construct(){
            $this->usuarioDAO = new UsuariosDAO();
        }

        public function inserirUsuario(){
            $rotuloBotao = "Inserir";
            $acao = "insercaoUsuario";
            $usuario = null;
            include_once "view/usuarios/cadastroUsuarios.php";
        }

        public function insercaoUsuario(){
            $usuario = new Usuarios($_POST["id"], $_POST["nome"],$_POST["matricula"]);
            $this->usuarioDAO->inserirUsuario($usuario);
            $this->inserirUsuario();
        }

       public function listarUsuarios(){
           $listaUsuarios =  $this->usuarioDAO->listarUsuario();
           include_once "view/usuarios/listaUsuarios.php";
       }

       public function atualizarUsuarios(){
           $rotuloBotao = "Alterar";
           $acao = "alteracaoDeUsuarios";
           $usuario = $this->usuarioDAO->listarUsuario($_GET["id"]);
           include_once "view/usuarios/cadastroUsuarios.php";
       }

       public function alteracaoDeUsuarios(){
           $usuario = new Usuarios($_POST["id"],$_POST["nome"],$_POST["matricula"]);
           $this->usuarioDAO->atualizarUsuarios($usuario);
           $this->listarUsuarios();
       }

       public function excluirUsuario(){
         $this->usuarioDAO->excluirUsuario($_GET["id"]);
         $this->listarUsuario();
       }
    }