<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Dinâmica -  Consultoria em Marcas</title>
        <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
        <script src="jquery183.js"></script>
        <script src="js/maskedinput.js" type="text/javascript"></script>
        <script src="js/validate.js" type="text/javascript"></script>
        <script src="js/config.js" type="text/javascript"></script>
        <script src="js/validateCPF_CNPJ.js" type="text/javascript"></script>
        <script src="js/formulario/script.js"></script>
        <script src="js/menu_fix.js"></script>
    </head>
    <body>
        <header>
            <div class="head_ct">
                <a href="?index" class="logo"></a>

                <div class="top">
                    <label>Contato: <span class="LetraMaior">(11) 2232-7207</span><br>contato@registrandomarca.com.br  <br/><br/>
                </div>
            </div>
        </header>
		
		<style>
			.form {
				background-color:#999;
                                color: #ffffff;
			}
		</style>
		
		<div class="container_menu">
                    <menu>
                        <li><a href="?index" class="home">Início</a></li>
                        <li><a href="?formulario" class="form">Consulte sua Marca</a></li>
                        <li><a href="?saibamais" class="saiba_mais">Perguntas</a></li>
                        <li><a href="?etapas" class="etapas">Etapas do Registro</a></li>
                        <li><a href="?quemsomos" class="quem_somos">Quem Somos</a></li>
                        <li><a href="?politica" class="politica">Política de Privacidade</a></li>
                    </menu>
		</div>	

        <span class="spacer"></span>
        <div class="ct">
            <div class="container">
                <h1>A Consulta de sua(s) Marca(s) é Grátis</h1>
                <hr />
                <h2 class="title_form">Solicite uma Pesquisa a fim de saber se a Marca que você pretende está livre para Registro.<br/>
                    Preencha os campos abaixo, faremos a Pesquisa e retornamos no seu e-mail em até 48 horas.<br/>
                    <a class="link_preto" href="?politica">Política de Privacidade</a><br/><br/>
                    <div class="centro">(Caso tenha Urgência- Ligue (11) 2232-7207)</div>
                </h2>

                <form name="FormDados" id="FormDados" class="form_contact" accept-charset="?" action="index.php?formulario" method="post">
                    <label>Empresa</label>
                    <input name="Empresa" id="Empresa" type="text"/>

                    <label>CNPJ</label>
                    <input name="CNPJ" id="CNPJ" type="text"/>
                    
                    <label>Ramo de Atuação</label>
                    <input name="Ramo" id="Ramo" type="text"/>
                    
                    <label>Nome para Contato*</label>
                    <input name="Contato" id="Contato" type="text"/>
                    
                    <label>Telefone*</label>
                    <input name="Telefone" id="Telefone" type="text" class="half"/>
                    
                    <label>Celular</label>
                    <input name="Celular" id="Celular" type="text" class="half"/>
                    
                    <label>E-mail*</label>
                    <input name="Email" id="Email" type="text"/>
                    
                    <label>Dúvidas</label>
                    <textarea name="Duvidas" id="Duvidas"></textarea>

                    <label class="strong">Marcas Pretendidas</label>
                                        
                    <table class="table_form">
                        <tr>
                            <td colspan="2">
                                <label>Modelo de contrato pretendido</label>
                                <input name="Modelo" type="radio" value="R$990,00 em até 3X (sem juros)" checked>R$990,00 em até 3X (sem juros)</input> </br>
                                <input name="Modelo" type="radio" value="R$1.900,00 em até 10X (sem juros)">R$1.900,00 em até 10X (sem juros)</input>
                            </td>
                        <tr>
                            <td>
                                <label>1</label>
                                <input name="Marca1" id="Marca1" type="text"/>
                            </td>
                            <td class="right">
                                <label>2</label>
                                <input name="Marca3" id="Marca2" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>3</label>
                                <input name="Marca3" id="Marca3" type="text"/>
                            </td>
                            <td class="right">
                                <label>4</label>
                                <input name="Marca4" id="Marca4" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>5</label>
                                <input name="Marca5" id="Marca5" type="text"/>
                            </td>
                            <td class="right">
                                <label>6</label>
                                <input name="Marca6" id="Marca6" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>7</label>
                                <input name="Marca7" id="Marca7" type="text"/>
                            </td>
                            <td class="right">
                                <label>8</label>
                                <input name="Marca18" id="Marca8" type="text"/>
                            </td>
                        </tr>
                    </table>    
  
                    <div class="txt_form">Caso as Marcas estejam livres para Registro, você receberá junto com a consulta feita a relação de documentos necessários para dar entrada no registro das marcas.</div>

                    <input id="Enviar" type="submit" value="Enviar"/>
                </form>

            </div>
        </div>

        <footer>
            <span class="spacer"></span>
            <div class="ct">
                <label>Contato: <span class="LetraMaior">(11) 2232-7207</span> | contato@registrandomarca.com.br  <br/><br/>
                        Dinâmica Consultoria em Marcas <?php echo date("Y"); ?> © Todos os direitos reservados <span><a href="http://jeanreis.com" target="_blank">Desenvolvido por Jean Reis</a></span></label>
            </div>
        </footer>
    </body>
</html>