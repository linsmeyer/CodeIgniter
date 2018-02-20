<!-- Basic Styles -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/bootstrap.min.css">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-production-plugins.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-production.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-skins.min.css">

<!-- SmartAdmin RTL Support -->
<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/smartadmin-rtl.min.css">

<link rel="stylesheet" type="text/css" media="screen" href="https://dash.chooseapps.me/smartadmin/css/demo.min.css">

<style type="text/css">
    #container
    {
        width:900px;
        margin: auto;
        background-color: #ffffff;
        padding:20px;
        font-size:14px;
        font-family:tahoma;
    }
	label
	{
		vertical-align: top;
		padding:5px;
	}
	input,textarea
	{
		padding:5px;
	}
	.success
	{
		color:green;
	}
</style>

<div id="container">

    <?php if($msg = $this->session->flashdata("message")){ ?>
        <div class="alert alert-block alert-warning">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Validação do Formulário!</h4>
            <p>
                <?=$msg?>
            </p>
        </div>
    <?php }else if(validation_errors() != false){ ?>
        <div class="alert alert-block alert-warning">
            <a class="close" data-dismiss="alert" href="#">×</a>
            <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Validação do Formulário!</h4>

            <?php echo validation_errors(); ?>

        </div>
    <?php }else{ ?>

    <?php } ?>

    <section class="">

        <div class="widget-body no-padding">

            <form action="" method="post" class="smart-form" novalidate="novalidate">

                <fieldset>

                    <legend>Criar Novo Usuário</legend>

                    <div class="row">
                        <section class="col col-6">
                            <label class="label" for="user_name">Nome</label>
                            <label class="input">
                                <input type="text" name="user[user_name]" id="user_name"/>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="label" for="user_email">Email:</label>
                            <label class="input">
                                <input type="text" name="user[user_email]" id="user_email"/>
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="label" for="user_phone">Celular:</label>
                            <label class="input">
                                <input type="text" name="user[user_phone]" id="user_phone"/>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="label" for="user_rg">RG:</label>
                            <label class="input">
                                <input type="text" name="user[user_rg]" id="user_rg"/>
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="label" for="user_password">Senha:</label>
                            <label class="input">
                                <input type="password" name="user[user_password]" id="user_password" maxlength="8"/>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="label" for="user_cfm_password">Confirme a Senha:</label>
                            <label class="input">
                                <input type="password" name="user[user_cfm_password]" id="user_cfm_password" maxlength="8"/>
                            </label>
                        </section>
                    </div>

                </fieldset>

                <fieldset>

                    <div class="row">
                        <section class="col col-6">
                            <label class="label" for="user_zip">CEP:</label>
                            <label class="input">
                                <input type="text" name="user[user_zip]" id="user_zip" maxlength="9"/>
                            </label>
                        </section>

                        <section class="col col-6">
                            <footer style="float: left;padding: 15px 0px 0px;border-top: 0px solid rgba(0,0,0,.1);background: #ffffff;">
                                <a class="btn btn-primary" id="consulta-cep1" name="consulta-cep1" onclick="getZIP(this, '1');">
                                    <i name="consulta-cep1" class="fa fa-spinner fa-fw hidden"></i>
                                    <span name="consulta-cep1">Consultar CEP</span>
                                </a>
                            </footer>
                        </section>

                        <section class="col col-3">
                        </section>
                    </div>

                    <section>
                        <label for="address2" class="input">
                            <label class="label" for="user_address">Logradouro:</label>
                            <label class="input">
                                <input type="text" name="user[user_address]" id="user_address"/>
                            </label>
                    </section>

                    <section>
                        <div class="row">
                            <section class="col col-6">
                                <label class="label" for="user_neighborhood">Bairro:</label>
                                <label class="input">
                                    <input type="text" name="user[user_neighborhood]" id="user_neighborhood"/>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="label" for="user_city">Cidade:</label>
                                <label class="input">
                                    <input type="text" name="user[user_city]" id="user_city"/>
                                </label>
                            </section>
                        </div>
                    </section>

                </fieldset>

                <footer>
                    <input type="submit" class="btn btn-primary" name="create_user" value="Novo Usuário"/>
                </footer>
            </form>

        </div>

    </section>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="https://dash.chooseapps.me/smartadmin/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="https://dash.chooseapps.me/smartadmin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="https://dash.chooseapps.me/smartadmin/js/bootstrap/bootstrap.min.js"></script>

<!-- Demo purpose only -->
<script src="https://dash.chooseapps.me/smartadmin/js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="https://dash.chooseapps.me/smartadmin/js/app.min.js"></script>


<script type="text/javascript" src="https://chooseapps.me/invite/jquery.maskedinput.min.js"></script>


<script type="text/javascript">
    <!--

    function Log(textbox, campo) {
        $('#'+campo).focus();
        return true;
    }

    $(document).ready(function () {

        $("#user_phone").mask("(99) 99999-9999");

        $('input[name=\'user[user_zip]').mask("99999-999");

        var address_row = 1;

        $('a[name=\'consulta-cep' + address_row + '\']').attr('disabled', true);

        $('input[name=\'user[user_zip]').keyup(function(){
            checkZIP($(this), 1);
        });

    });

    function checkZIP(element, index )
    {
        var val = $( element ).val();
        var filtrado = val.replace(/[^a-zA-Z0-9]/g, '');
        var mask = val.match(/[-.]/g);

        console.log("index:"+filtrado);
        console.log("filtrado:"+filtrado);

        if( filtrado.length == $( element ).attr('maxLength')-mask.length ) {
            $('a[name=\'consulta-cep' + index + '\']').removeAttr('disabled');
        }else{
            $('a[name=\'consulta-cep' + index + '\']').attr('disabled', true);
        }
    }

    function getZIP(element, index) {

        var val = $('input[name=\'user[user_zip]').val();

        console.log('ok'+val);
        console.log('ok'+val.length);

        if(val.length == 9) {
            $.ajax({
                url: 'https://external.chooseapps.me/index.php',
                type: 'post',
                crossDomain: true,
                dataType: 'json',
                data: 'zip=' + encodeURIComponent($('input[name=\'user[user_zip]').val()),
                beforeSend: function () {

                    $('a[name=\'consulta-cep' + index + '\']').attr('class', 'btn btn-warning');
                    $('i[name=\'consulta-cep' + index + '\']').attr('class', 'fa fa-spinner fa-fw');
                    $('span[name=\'consulta-cep' + index + '\']').text("Aguarde...");
                    $('a[name=\'consulta-cep' + index + '\']').attr('disabled', 'disabled');

                    $('input[name=\'user[user_address]').attr('placeholder', 'Consultando...');
                    $('input[name=\'user[user_neighborhood]').attr('placeholder', 'Consultando...');
                    $('input[name=\'user[user_city]').attr('placeholder', 'Consultando...');

                },
                complete: function () {

                    $('a[name=\'consulta-cep' + index + '\']').attr('class', 'btn btn-primary');
                    $('i[name=\'consulta-cep' + index + '\']').attr('class', 'fa fa-spinner fa-fw hidden');
                    $('span[name=\'consulta-cep' + index + '\']').text("Consultar CEP");
                    $('a[name=\'consulta-cep' + index + '\']').removeAttr('disabled');

                },
                success: function (json) {

                    if (json['status'] == 'success') {

                        if (json['result'] && json['result'] != '') {

                            $('input[name=\'user[user_address]').val(json['result'][0]['logradouro']);
                            $('input[name=\'user[user_neighborhood]').val(json['result'][0]['bairro']);
                            $('input[name=\'user[user_city]').val(json['result'][0]['localidade']);

                        }

                    } else if (json['status'] == 'error') {

                        $('input[name=\'user[user_address]').val('');
                        $('input[name=\'user[user_neighborhood]').val('');
                        $('input[name=\'user[user_city]').val('');

                        $('input[name=\'user[user_address]').attr('placeholder', 'Não encontrado...');
                        $('input[name=\'user[user_neighborhood]').attr('placeholder', 'Não encontrado...');
                        $('input[name=\'user[user_city]').attr('placeholder', 'Não encontrado...');

                    }

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });

        }

    }
    -->
</script>

