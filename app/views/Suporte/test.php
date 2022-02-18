<?php

use app\core\util\EmailSend;
/*
$email = new EmailSend();
$corpo = '<h1 style="color: red;">Olá, email de recuperação de senha</h1>
        <br>
        <ul>
        <li>dasdadad</li>
        <li>dasdasdasd</li>
        </ul>
        <a href="http://www.google.com.br">Link</a>';
$sucesso = $email->sendEmail('marcosreis581@gmail.com','EMAIL DE RECUPERAÇÃO DE SENHA',$corpo);

echo $sucesso ? 'Email enviado com sucesso!' : 'pau'.$email->getErroEmail();
*/
//echo URL_BASE."assets/templates/sistema/paineis/js/sb-admin-2.min.js";

?>
 <div class="container container-formulario">
                        <form class="" method="post">

                            <h2 style="text-align: center;">Informações Básicas</h2>

                            <div class="col-xl-12 col-lg-7 etapaform">

                                <div class="form-row">

                                    <div class="col-xl-5">
                                        <label for="razao_social_pessoa_juridica">Razão Social</label>
                                        <input type="text" class="form-control" name="razao_social_pessoa_juridica"
                                            placeholder="Razão Social" required>
                                    </div>


                                    <div class="col-xl-4">
                                        <label for="nome_fantasia_pessoa_juridica">Nome Fantasia</label>
                                        <input type="text" class="form-control" name="nome_fantasia_pessoa_juridica"
                                            placeholder="Nome Fantasia" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="data_de_fundacao_pessoa_juridica"> Data de Fundação</label>
                                        <input type="date" class="form-control" name="data_de_fundacao_pessoa_juridica"
                                            required>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="tipo_empresa_pessoa_juridica">Tipo de Empresa</label>
                                        <input type="text" class="form-control" name="tipo_empresa_pessoa_juridica"
                                            placeholder="Tipo de Empresa" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="atividade_pessoa_juridica">Atividade</label>
                                        <input type="text" class="form-control" name="atividade_pessoa_juridica"
                                            placeholder="Atividade" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="numero_registro_pessoa_juridica">Registro</label>
                                        <input type="number" class="form-control" name="numero_registro_pessoa_juridica"
                                            placeholder="Número de Registro">
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="faturamento_pessoa_juridica">Faturamento</label>
                                        <input type="number" class="form-control" name="faturamento_pessoa_juridica"
                                            placeholder="Número de Registro" required>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="cnpj_pessoa_juridica">CNPJ</label>
                                        <input type="text" class="form-control" name="cnpj_pessoa_juridica"
                                            placeholder="CNPJ" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="inscricao_estadual_pessoa_juridica">Inscrição</label>
                                        <input type="text" class="form-control"
                                            name="inscricao_estadual_pessoa_juridica" placeholder="Inscrição Estadual">
                                    </div>

                                </div>


                            </div>

                            <div class="col-xl-12 col-lg-7 etapaform">
                                <h2 style="text-align: center; margin-top:2rem;">Contato e Endereço</h2>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="cep_pessoa_juridica">CEP </label>
                                        <input type="number" class="form-control" name="cep_pessoa_juridica"
                                            placeholder="CEP" required>
                                    </div>

                                    <div class="col-xl-6 col-lg-3">
                                        <label for="rua_pessoa_juridica">Endereço</label>
                                        <input type="text" class="form-control" name="rua_pessoa_juridica"
                                            placeholder="Rua/Avenida" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-6">
                                        <label for="bairro_pessoa_juridica">Bairro</label>
                                        <input type="text" class="form-control" name="bairro_pessoa_juridica"
                                            placeholder="Bairro" required>

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-5 col-lg-3">
                                        <label for="complemento_pessoa_juridica">Complemento</label>
                                        <input type="text" class="form-control" name="complemento_pessoa_juridica"
                                            placeholder="Complemento">
                                    </div>

                                    <div class="col-xl-2 col-lg-6">
                                        <label for="numero_pessoa_juridica">Número</label>
                                        <input type="number" class="form-control" name="numero_pessoa_juridica"
                                            placeholder="Num." required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="cidade_pessoa_juridica">Cidade</label>
                                        <input type="text" class="form-control" name="cidade_pessoa_juridica"
                                            placeholder="Cidade" required>
                                    </div>

                                    <div class="col-xl-2 col-lg-6">
                                        <label for="estado_pessoa_juridica">UF</label>
                                        <input type="text" class="form-control" name="estado_pessoa_juridica"
                                            placeholder="UF." required>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="telefone_pessoa_juridica">Telefone</label>
                                        <input type="number" class="form-control" name="telefone_pessoa_juridica"
                                            placeholder="(01) 2345-6789" required>
                                    </div>

                                    <div class="col-xl-5 col-lg-2">
                                        <label for="email_pessoa_juridica">Núm.</label>
                                        <input type="text" class="form-control" name="email_pessoa_juridica"
                                            placeholder="email@exemplo.com" required>
                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-7 etapaform">

                                <h2 style="text-align: center; margin-top:2rem;">Sócio/Representante</h2>

                                <div class="form-row">

                                    <div class="col-xl-6 col-lg-3">
                                        <label for="nome_socio_pessoa_juridica">Nome do Sócio/Representante</label>
                                        <input type="text" class="form-control" name="nome_socio_pessoa_juridica"
                                            placeholder="Nome" required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="data_de_nascimento_socio_pessoa_juridica">Data de nascimento</label>
                                        <input type="date" class="form-control"
                                            name="data_de_nascimento_socio_pessoa_juridica" required>
                                    </div>

                                    <div class="col-xl 3">
                                        <label for="genero_socio_pessoa_juridica">Gênero</label>
                                        <select class="form-control" id="genero_socio_pessoa_juridica" required>
                                            <option disabled selected>Gênero</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-6 col-lg-3">
                                        <label for="nome_mae_socio_pessoa_juridica">Nome da Mãe</label>
                                        <input type="text" class="form-control" id="nome_mae_socio_pessoa_juridica"
                                            required placeholder="Nome da mãe">
                                    </div>

                                    <div class="col-xl-6 col-lg-3">
                                        <label for="nome_pai_socio_pessoa_juridica">Nome do Pai</label>
                                        <input type="text" class="form-control" id="nome_pai_socio_pessoa_juridica"
                                            placeholder="Nome do pai">

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-4">
                                        <label for="ppe_socio_pessoa_juridica">PPE</label>
                                        <select class="form-control" name="ppe_socio_pessoa_juridica" placeholder="PPE"
                                            required>
                                            <option disabled selected>PPE</option>
                                            <option value="true">Sim</option>
                                            <option value="false">Não</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-4 col-lg-2">
                                        <label for="nacionalidade_socio_pessoa_juridica">Nacionalidade</label>
                                        <input type="text" class="form-control"
                                            name="nacionalidade_socio_pessoa_juridica" placeholder="Nacionalidade"
                                            required>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="cpf_socio_pessoa_juridica">CPF</label>
                                        <input type="number" class="form-control" name="cpf_socio_pessoa_juridica"
                                            placeholder="CPF" required>
                                    </div>

                                    <div class="col-xl-2 col-lg-3">
                                        <label for="bem">Bem</label>
                                        <select class="form-control" id="bem" required placeholder="Bem">
                                            <option disabled selected>Bem</option>
                                            <option value="imovel">Imóvel</option>
                                            <option value="veiculo">Veículo</option>
                                            <option value="servico">Serviço</option>
                                        </select>

                                    </div>

                                </div>

                                <h3 style="margin-top: 2rem;">Patrimônio</h3>

                                <div class="form-row">

                                    <div class="col-xl-8">
                                        <label for="primeiro_patrimonio_pessoa_juridica">Patrimônio</label>
                                        <input type="text" class="form-control"
                                            name="primeiro_patrimonio_pessoa_juridica" placeholder="Patrimônio">
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="valor_primeiro_patrimonio_pessoa_juridica">Valor</label>
                                        <input type="number" class="form-control"
                                            name="valor_primeiro_patrimonio_pessoa_juridica" placeholder="Valor">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-8">
                                        <label for="segundo_patrimonio_pessoa_juridica">Patrimônio</label>
                                        <input type="text" class="form-control"
                                            name="primeiro_patrimonio_pessoa_juridica" placeholder="Patrimônio">
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="valor_segundo_patrimonio_pessoa_juridica">Valor</label>
                                        <input type="number" class="form-control"
                                            name="valor_segundo_patrimonio_pessoa_juridica" placeholder="Valor">
                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-7 etapaform">
                                <h2 style="text-align: center; margin-top:2rem;">Descrição do imóvel</h2>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="tipo_imovel_pessoa_juridica">Tipo de imóvel</label>
                                        <input type="text" class="form-control" name="tipo_imovel_pessoa_juridica"
                                            placeholder="Tipo de imóvel">
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="cep_imovel_pessoa_juridica">CEP do imóvel</label>
                                        <input type="number" class="form-control" name="cep_imovel_pessoa_juridica"
                                            placeholder="CEP" required>
                                    </div>

                                    <div class="col-xl-6 col-lg-6">
                                        <label for="rua_imovel_pessoa_juridica">Endereço do imóvel </label>
                                        <input type="text" class="form-control" name="rua_imovel_pessoa_juridica"
                                            placeholder="Rua/Avenida" required>
                                    </div>

                                </div>

                                <div class="form-row">


                                    <div class="col-xl-4 col-lg-4">
                                        <label for="utilidade_imovel_pessoa_juridica">Finalidade </label>
                                        <input type="text" class="form-control" name="utilidade_imovel_pessoa_juridica"
                                            placeholder="Finalidade">
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="bairro_imovel_pessoa_juridica"> Bairro do imóvel </label>
                                        <input type="text" class="form-control" name="bairro_imovel_pessoa_juridica"
                                            placeholder="Bairro">
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="complemento_imovel_pessoa_juridica">Complemento do imóvel</label>
                                        <input type="text" class="form-control"
                                            name="complemento_imovel_pessoa_juridica" placeholder="Complemento">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="numero_imovel_pessoa_juridica">Número</label>
                                        <input type="text" class="form-control" name="numero_imovel_pessoa_juridica"
                                            placeholder="Número">
                                    </div>


                                    <div class="col-xl-3 col-lg-3">
                                        <label for="cidade_imovel_pessoa_juridica">Cidade</label>
                                        <input type="text" class="form-control" name="cidade_imovel_pessoa_juridica"
                                            placeholder="Cidade">
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="estado_imovel_pessoa_juridica">UF</label>
                                        <input type="text" class="form-control" name="estado_imovel_pessoa_juridica"
                                            placeholder="UF">
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-xl-12">
                                        <label for="observacao_imovel_pessoa_juridica">Observações</label>
                                        <textarea name="observacao_imovel_pessoa_juridica" class="form-control"
                                            placeholder="Relate informações adicionais"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="consultor_analise_pessoa_juridica">Nome do consultor</label>
                                        <input type="text" class="form-control" name="consultor_analise_pessoa_juridica"
                                            placeholder="Consultor" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="data_atendimento_pessoa_juridica">Data de criação</label>
                                        <input type="date" class="form-control" name="data_atendimento_pessoa_juridica"
                                            disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="validade_proposta_pessoa_juridica">Data de vencimento</label>
                                        <input type="date" class="form-control" name="validade_proposta_pessoa_juridica"
                                            disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_bruto_pessoa_juridica">Valor</label>
                                        <input type="number" class="form-control" name="valor_bruto_pessoa_juridica"
                                            placeholder="Valor" required>
                                    </div>

                                    <div class="col-xl 3">
                                        <label for="tipo_credito_pessoa_juridica">Tipo de crédito</label>
                                        <select class="form-control" id="tipo_credito_pessoa_juridica" required
                                            placeholder="Crédito">
                                            <option disabled selected>Crédito</option>
                                            <option value="cdc">CDC</option>
                                            <option value="consorcio">Consórcio</option>
                                        </select>
                                    </div>


                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_adesao_pessoa_juridica">Valor de Adesão</label>
                                        <input type="number" class="form-control" name="valor_adesao_pessoa_juridica"
                                            placeholder="Valor" disabled>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="estado_analise_pessoa_juridica">Estado da proposta</label>
                                        <input type="text" class="form-control" name="estado_analise_pessoa_juridica"
                                            placeholder="Estado" disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="parcela1_pessoa_juridica">Parcela</label>
                                        <input type="text" class="form-control" name="parcela1_pessoa_juridica"
                                            placeholder="Parcela" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="valor_parcela1_pessoa_juridica">Valor da parcela</label>
                                        <input type="number" class="form-control" name="valor_parcela1_pessoa_juridica"
                                            placeholder="Valor da parcela" disabled>
                                    </div>

                                </div>

                                <div class="form-row col-xl-4 col-lg-4">
                                    <button style="margin:2rem;" class="btn btn-primary" action="">Adicionar
                                        parcela</button>
                                </div>


                            </div>

                            <div class="col-xl-12 col-lg-7 etapaform">
                                <h2 style="text-align: center; margin-top:2rem;">Descrição do veículo</h2>

                                <div class="form-row">

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="tipo_veiculo_pessoa_juridica">Tipo de veículo </label>
                                        <select class="form-control" name="tipo_veiculo_pessoa_juridica">
                                            <option selected disabled>Veículo</option>
                                            <option value="carro">Carro</option>
                                            <option value="moto">Moto</option>
                                            <option value="caminhao">Caminhão</option>
                                        </select>
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="estado_veiculo_pessoa_juridica">Estado</label>
                                        <input type="text" class="form-control" name="estado_veiculo_pessoa_juridica"
                                            placeholder="Estado">
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="marca_veiculo_pessoa_juridica">Marca do veículo</label>
                                        <input type="text" class="form-control" name="marca_veiculo_pessoa_juridica"
                                            placeholder="Marca">
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="modelo_veiculo_pessoa_juridica">Modelo do veículo</label>
                                        <input type="text" class="form-control" name="modelo_veiculo_pessoa_juridica"
                                            placeholder="Modelo">
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="ano_veiculo_pessoa_juridica">Ano do modelo</label>
                                        <input type="number" class="form-control" name="ano_veiculo_pessoa_juridica"
                                            placeholder="Ano do modelo">
                                    </div>

                                    <div class="col-xl-2 col-lg-2">
                                        <label for="ano_frabricação_veiculo_pessoa_juridica">Ano de fabricação</label>
                                        <input type="number" class="form-control"
                                            name="ano_frabricação_veiculo_pessoa_juridica"
                                            placeholder="Ano de fabricação">
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="consultor_analise_pessoa_juridica">Nome do consultor</label>
                                        <input type="text" class="form-control" name="consultor_analise_pessoa_juridica"
                                            placeholder="Consultor" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="data_atendimento_pessoa_juridica">Data de criação</label>
                                        <input type="date" class="form-control" name="data_atendimento_pessoa_juridica"
                                            placeholder="" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="validade_proposta_pessoa_juridica">Data de vencimento</label>
                                        <input type="date" class="form-control" name="validade_proposta_pessoa_juridica"
                                            placeholder="" disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_bruto_pessoa_juridica">Valor</label>
                                        <input type="number" class="form-control" name="valor_bruto_pessoa_juridica"
                                            placeholder="Valor" required>
                                    </div>

                                    <div class="col-xl 3">
                                        <label for="tipo_credito_pessoa_juridica">Tipo de crédito</label>
                                        <select class="form-control" id="tipo_credito_pessoa_juridica" required
                                            placeholder="Crédito">
                                            <option disabled selected>Crédito</option>
                                            <option value="cdc">CDC</option>
                                            <option value="consorcio">Consórcio</option>
                                        </select>
                                    </div>


                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_adesao_pessoa_juridica">Valor de Adesão</label>
                                        <input type="number" class="form-control" name="valor_adesao_pessoa_juridica"
                                            placeholder="Valor" disabled>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="estado_analise_pessoa_juridica">Estado da proposta</label>
                                        <input type="text" class="form-control" name="estado_analise_pessoa_juridica"
                                            placeholder="Estado" disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="parcela1_pessoa_juridica">Parcela</label>
                                        <input type="text" class="form-control" name="parcela1_pessoa_juridica"
                                            placeholder="Parcela" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="valor_parcela1_pessoa_juridica">Valor da parcela</label>
                                        <input type="number" class="form-control" name="valor_parcela1_pessoa_juridica"
                                            placeholder="Valor da parcela" disabled>
                                    </div>

                                </div>

                                <div class="form-row col-xl-4 col-lg-4">
                                    <button style="margin:2rem;" class="btn btn-primary" action="">Adicionar
                                        parcela</button>
                                </div>


                            </div>

                            <div class="col-xl-12 col-lg-7 etapaform">
                                <h2 style="text-align: center; margin-top:2rem;">Descrição do serviço</h2>

                                <div class="form-row">

                                    <div class="col-xl-6 col-lg-6">
                                        <label for="nome_servico_pessoa_juridica">Nome do serviço</label>
                                        <input type="text" class="form-control" name="nome_servico_pessoa_juridica"
                                            placeholder="Nome" required>
                                    </div>

                                    <div class="col-xl-6 col-lg-6">
                                        <label for="tipo_servico_pessoa_juridica">Tipo de serviço</label>
                                        <input type="text" class="form-control" name="tipo_servico_pessoa_juridica"
                                            placeholder="Tipo" required>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-xl-12">
                                        <label for="descricacao_servico_pessoa_juridica">Descrição do serviço</label>
                                        <textarea name="descricacao_servico_pessoa_juridica" class="form-control"
                                            placeholder="Descreva o serviço em questão" required></textarea>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="consultor_analise_pessoa_juridica">Nome do consultor</label>
                                        <input type="text" class="form-control" name="consultor_analise_pessoa_juridica"
                                            placeholder="Consultor" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="data_atendimento_pessoa_juridica">Data de criação</label>
                                        <input type="date" class="form-control" name="data_atendimento_pessoa_juridica"
                                            placeholder="" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="validade_proposta_pessoa_juridica">Data de vencimento</label>
                                        <input type="date" class="form-control" name="validade_proposta_pessoa_juridica"
                                            placeholder="" disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_bruto_pessoa_juridica">Valor</label>
                                        <input type="number" class="form-control" name="valor_bruto_pessoa_juridica"
                                            placeholder="Valor" required>
                                    </div>

                                    <div class="col-xl 3">
                                        <label for="tipo_credito_pessoa_juridica">Tipo de crédito</label>
                                        <select class="form-control" id="tipo_credito_pessoa_juridica" required
                                            placeholder="Crédito">
                                            <option disabled selected>Crédito</option>
                                            <option value="cdc">CDC</option>
                                            <option value="consorcio">Consórcio</option>
                                        </select>
                                    </div>


                                    <div class="col-xl-3 col-lg-3">
                                        <label for="valor_adesao_pessoa_juridica">Valor de Adesão</label>
                                        <input type="number" class="form-control" name="valor_adesao_pessoa_juridica"
                                            placeholder="Valor" disabled>
                                    </div>

                                    <div class="col-xl-3 col-lg-3">
                                        <label for="estado_analise_pessoa_juridica">Estado da proposta</label>
                                        <input type="text" class="form-control" name="estado_analise_pessoa_juridica"
                                            placeholder="Estado" disabled>
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="parcela1_pessoa_juridica">Parcela</label>
                                        <input type="text" class="form-control" name="parcela1_pessoa_juridica"
                                            placeholder="Parcela" disabled>
                                    </div>

                                    <div class="col-xl-4 col-lg-4">
                                        <label for="valor_parcela1_pessoa_juridica">Valor da parcela</label>
                                        <input type="date" class="form-control" name="valor_parcela1_pessoa_juridica"
                                            placeholder="Valor da parcela" disabled>
                                    </div>

                                </div>

                                <div class="form-row col-xl-4 col-lg-4">
                                    <button style="margin:2rem;" class="btn btn-primary" action="">Adicionar
                                        parcela</button>
                                </div>


                            </div>

                            <div class="row div-enviar">
                                <button class="btn btn-primary form-enviar" style="margin:auto;"
                                    action="submit">Enviar</button>
                            </div>


                        </form>
                    </div>

