<script>
      $(document).ready(function($) {
          $("#cpf").hide();
          $(".tipo_pessoa").change(function(event) {
            if($(this).val()=="pf"){
              $("#nome_fantasia").hide();
              $("#cnpj").hide();
              $("#cpf").show();
            }else{
              $("#nome_fantasia").show();
              $("#cnpj").show();
              $("#cpf").hide();
            }
          });
          $("#addResponsaveis").click(function(event) {
            $("#divResponsaveis").append('<section class="panel"> <header class="panel-heading"> RESPONSÁVEIS </header> <div class="panel-body"> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">RESPONS.</label> <div class="col-sm-10"> <input type="text" class="form-control nome" id="nome" name="nome[]" > </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">CEL</label> <div class="col-sm-10"> <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="celular[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">TEL1</label> <div class="col-sm-10"> <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="telefone[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">FAX1</label> <div class="col-sm-10"> <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="fax[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">NEXTEL1</label> <div class="col-sm-10"> <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="nextel[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">EMAIL1</label> <div class="col-sm-10"> <input type="text" class="form-control" name="email[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">SKYPE</label> <div class="col-sm-10"> <input type="text" class="form-control" name="skype[]"> </div> </div> <div class="form-group"> <label class="col-sm-2 col-sm-2 control-label">SITE</label> <div class="col-sm-10"> <input type="text" class="form-control" name="site[]"> </div> </div></div> </section>');
            $(".nome").last().focus();
          });
          $("#limpar").click(function(event) {
              $("input[type!=radio]").val("");
              $("select").val("");
              $("textarea").val("");
              $("#tagsinput").removeTag();
          });
      });
      </script>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <?php if(isset($sucesso)){ ?>
                    <div class="alert alert-success alert-block fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <h4>
                            <i class="icon-ok-sign"></i>
                            Concluído!
                        </h4>
                        <p>Cadastro finalizado com sucesso</p>
                    </div>
                    <?php } ?>
                    <div class="row">
                      <div class="col-md-12">
                       <section class="panel">
                         <header class="panel-heading">
                              CADASTRO
                          <span class="tools pull-right">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                          </span>
                         </header>
                        <div class="panel-body " style="background-color:#dadada;">
                        <form class="form-horizontal tasi-form" action="<?php echo site_url() ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">




                          <div class="row">
                            <div class="col-lg-6">
                                  <section class="panel">
                                      <header class="panel-heading">
                                          DADOS FORNECEDOR
                                      </header>
                                      <div class="panel-body">
                                         
                                              <!-- selecione tipo de pessoa -->
                                              <div class="radios-inline">
                                                  <label class="label_radio">
                                                      <input name="tipo_pessoa" class="tipo_pessoa" value="pj" type="radio" checked /> PESSOA JURIDICA
                                                  </label>
                                                  <label class="label_radio">
                                                      <input name="tipo_pessoa" class="tipo_pessoa" value="pf" type="radio" /> PESSOA FISICA
                                                  </label>
                                              </div><br/>
                                              <!-- inserir campos -->

                                              <div class="form-group">
                                                  <label class="col-sm-2 col-sm-2 control-label">NOME</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="nome" name="nome_pessoa">
                                                  </div>
                                              </div>
                                              <div class="form-group" id="nome_fantasia">
                                                  <label class="col-sm-2 col-sm-2 control-label">NOME FANTASIA</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" class="form-control" id="nome-fantasia" name="nome_fantasia">
                                                  </div>
                                              </div>

                                              <div class="form-group" id="cnpj">
                                                  <label class="col-sm-2 col-sm-2 control-label">CNPJ</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" placeholder="" data-mask="99.999.999/9999-99" class="form-control" name="documento">
                                                  </div>
                                              </div>

                                              <div class="form-group" id="cpf">
                                                  <label class="col-sm-2 col-sm-2 control-label">CPF</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" placeholder="" data-mask="999.999.999-99" class="form-control" name="documento">
                                                  </div>
                                              </div>









                                               <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> ADICIONAR ARQUIVO</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> MUDAR</span>
                                                <input type="file" multiple name="arquivos[]" class="default" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>



                                          </div>
                                          </section>
                                      </div>

                                      <div class="col-lg-6">
                                      <section class="panel">
                                  <header class="panel-heading">
                                      TIPOS DE VENDAS
                                  </header>
                                  <div class="panel-body">
                                      <input name="pecas_fornecedor" id="tagsinput" class="tagsinput" value="" />
                                  </div>
                                  <div class="panel-body">
                                  <div class="form-group">
                                          <label class="control-label col-md-3">OBSERVAÇÃO</label>
                                          <div class="col-md-9">
                                              <textarea name="obs" class="form-control" rows="10"></textarea>
                                          </div>
                                      </div>
                              
                          </div>
                              </section>
                                       

                                      </div>
                        </div>

                                      



                        <div class="row">
                        <div class="col-lg-6" id="divResponsaveis">
                          <section class="panel">
                              <header class="panel-heading">
                                  RESPONSÁVEIS
                              </header>
                              <div class="panel-body">
                                  <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">RESPONS.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control nome" id="nome" name="nome[]" >
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">CEL</label>
                                            <div class="col-sm-10">
                                                <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="celular[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">TEL1</label>
                                            <div class="col-sm-10">
                                                <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="telefone[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">FAX1</label>
                                            <div class="col-sm-10">
                                                <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="fax[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">NEXTEL1</label>
                                            <div class="col-sm-10">
                                                <input type="text" data-mask="(99)9999-9999?9" class="form-control" name="nextel[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">EMAIL1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">SKYPE</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="skype[]">
                                            </div>
                                   </div>
                                   <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">SITE</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="site[]">
                                            </div>
                                   </div>
                                   <a id="addResponsaveis" class="btn btn-danger  btn-sm" href="#"> ADICIONAR MAIS RESPONSÁVEL</a>
                               </div>
                          </section>
                        </div>

                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    LOCAL
                                </header>
                                <div class="panel-body">
                                    <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">ENDEREÇO</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" id="endereco" name="endereco" >
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">NUMERO</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="numero" >
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">COMP.</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="complemento" >
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">BAIRRO</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="bairro" >
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">CIDADE</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="cidade" >
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">UF</label>
                                                          <div class="col-sm-10">
                                                              <select class="form-control" name="estado">
                                                                  <option value="AC">Acre</option>
                                                                  <option value="AL">Alagoas</option>
                                                                  <option value="AM">Amazonas</option>
                                                                  <option value="AP">Amapá</option>
                                                                  <option value="BA">Bahia</option>
                                                                  <option value="CE">Ceará</option>
                                                                  <option value="DF">Distrito Federal</option>
                                                                  <option value="ES">Espirito Santo</option>
                                                                  <option value="GO">Goiás</option>
                                                                  <option value="MA">Maranhão</option>
                                                                  <option value="MG">Minas Gerais</option>
                                                                  <option value="MS">Mato Grosso do Sul</option>
                                                                  <option value="MT">Mato Grosso</option>
                                                                  <option value="PA">Pará</option>
                                                                  <option value="PB">Paraíba</option>
                                                                  <option value="PE">Pernambuco</option>
                                                                  <option value="PI">Piauí</option>
                                                                  <option value="PR">Paraná</option>
                                                                  <option value="RJ">Rio de Janeiro</option>
                                                                  <option value="RN">Rio Grande do Norte</option>
                                                                  <option value="RO">Rondônia</option>
                                                                  <option value="RR">Roraima</option>
                                                                  <option value="RS">Rio Grande do Sul</option>
                                                                  <option value="SC">Santa Catarina</option>
                                                                  <option value="SE">Sergipe</option>
                                                                  <option value="SP">São Paulo</option>
                                                                  <option value="TO">Tocantins</option>
                                                              </select>
                                                          </div>
                                                 </div>
                                                 <div class="form-group">
                                                          <label class="col-sm-2 col-sm-2 control-label">PAÍS</label>
                                                          <div class="col-sm-10">
                                                              <input type="text" class="form-control" name="pais" >
                                                          </div>
                                                 </div>

                                </div>
                            </section>
                        </div>




                         <div class="col-sm-6">
                      <section class="panel">
                          <header class="panel-heading">
                              AÇÃO
                          </header>
                          <div class="panel-body">
                              
                              <button type="button" id="limpar" class="btn btn-info "><i class="icon-refresh"></i> LIMPAR</button>
                              <button type="submit" class="button-next btn btn-danger"><i class="icon-save"></i> CADASTRAR</button>
                              
                          </div>
                          </section>
                          </div>





                        
                        </div>




                       






                        </form>
                      </div>
                  </section>
              </div>
          </div>




                  <!--
                  ==================================
                  START THE TABLE
                  ==================================
                  -->
                  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              TODOS OS CADASTROS
                              <span class="tools pull-right">
                                  <a href="javascript:;" class="icon-chevron-down"></a>
                              </span>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>NOME</th>
                                          <th>CIDADE</th>
                                          <th>RESPONSÁVEL</th>
                                          <th>TEL</th>
                                          <th class="hidden-phone">AÇÃO</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr class="gradeX">
                                          <td>NOME 1 DSDS DDSA DDSSA FDSSSA ASD</td>
                                          <td>SP</td>
                                          <td>FABIANA</td>
                                          <td>19 9999 9999</td>
                                          <td class="center hidden-phone">
                                          <button class="btn btn-success btn-xs"><i class="icon-eye-open"></i></button>
                                          <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button>
                                          <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                          </td>
                                      </tr>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>NOME</th>
                                          <th>CIDADE</th>
                                          <th>RESPONSÁVEL</th>
                                          <th>TEL</th>
                                          <th class="hidden-phone">AÇÃO</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      