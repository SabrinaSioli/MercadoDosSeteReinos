
<form action="../../php.php" method="POST">

                    <!-- DADOS PESSOAIS-->
                    <fieldset>
                        <legend style="color: white">Dados Pessoais</legend>
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label style="color: white" for="nome">Nome: </label>
                                    <input id="nome" name="name" type=text title="Preencha o campo Nome" required /> 
                                </td>
                                <td align="left">
                                </td>
                            <tr>
                                <td>
                                    <label style="color: white">Nascimento: </label>
                                </td>
                                <td align="left">
                                    <input type="text" name="dia" size="2" maxlength="2" value="dd" required> 
                                    <input type="text" name="mes" size="2" maxlength="2" value="mm" required> 
                                    <input type="text" name="ano" size="4" maxlength="4" value="aaaa" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="rg">RG: </label>
                                </td>
                                <td align="left">
                                    <input name="rg" type="text" id="RG" title="Preencha o campo RG" required > 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white">CPF:</label>
                                </td>
                                <td align="left">
                                    <input name="cpf" type="text" id="CPF" title="Preencha o campo CPF" required size="9"> - <input type="text" name="cpf2" size="2" maxlength="2" required>
                                </td>
                            </tr>
                        </table>
                    </fieldset>

                    <br />
                    <!-- ENDEREÇO -->
                    <fieldset>
                        <legend style="color: white">Dados de Endereço</legend>
                        <table cellspacing="10">

                            <tr>
                                <td>
                                    <label style="color: white" for="rua">Rua:</label>
                                </td>
                                <td align="left">
                                    <input name="rua" type="text" id="Rua" title="Preencha o campo Rua" required >
                                </td>
                                <td>
                                    <label style="color: white" for="numero">Numero:</label>
                                </td>
                                <td align="left">
                                    <input name="numero" type="text" id="Numero" title="Preencha o campo Numero" required size="4">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="bairro">Bairro: </label>
                                </td>
                                <td align="left">
                                    <input name="bairro" type="text" id="Bairro" title="Preencha o campo Bairro" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="estado">Estado:</label>
                                </td>
                                <td align="left">
                                    <select name="estado"> 
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="cidade">Cidade: </label>
                                </td>
                                <td align="left">
                                    <input name="cidade" type="text" id="Cidade" title="Preencha o campo Cidade" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="cep">CEP: </label>
                                </td>
                                <td align="left">
                                    <input type="text" id="CEP" title="Preencha o campo CEP" required name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3" required>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <br />

                    <!-- DADOS DE LOGIN -->
                    <fieldset>
                        <legend style="color: white">Dados de login</legend>
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label style="color: white" for="email">E-mail: </label>
                                </td>
                                <td align="left">
                                    <input type="text" id="E-mail" title="Preencha o campo E-mail" required name="email">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label style="color: white" for="pass">Senha: </label>
                                </td>
                                <td align="left">
                                    <input type="password" id="Senha" title="Preencha o campo Senha" required name="pass">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label style="color: white" for="passconfirm">Confirme a senha: </label>
                                </td>
                                <td align="left">
                                    <input type="password" id="Confirm" title="Preencha o campo Confirme a senha" required name="passconfirm">
                                </td>
                            </tr>
                        </table>
                        <text> Observação: Os campos que não deseja atualizar deixe-os com o valor anterior! </text>
                    </fieldset>
                    <br />
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </form>

