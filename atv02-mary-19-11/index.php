<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9c2b5a2876.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Aula 19 do 11</title>
</head>

<body>
    <header>
        <div id="logo">
            <h1>MUSHY</h1>
        </div>

        <div id="nav">

            <ul>
                
                <li><a href="">Home</a> </li>
                <li><a href="">News</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">About</a></li>
            
            </ul>

        </div>

        <div id="perfil">
            <div id="nomeperfil">
                <h1>Profile</h1>
                <i class="fa-solid fa-user"></i>
            </div>
        </div>

    </header>

    <form>
        <div class="centro">

            <div id="centro1">
                <img src="img/florzinha-dois.jpg" alt="">
            </div>
           
            <div id="centro2">  
                <h2>Faça seu cadastro</h2><br>

                <div id="botoestp">
                    <label style="color: purple;">Tipo de pessoa:</label>
                    <div>
                        <input type="radio" id="fisica" name="tipo_pessoa" value="FISICA">
                        <label for="fisica">Física</label>
                    </div>
                    <div>
                        <input type="radio" id="juridica" name="tipo_pessoa" value="JURIDICA">
                        <label for="juridica">Jurídica</label>
                    </div>
                    <div>
                        <input type="radio" id="estrangeiro" name="tipo_pessoa" value="ESTRANGEIRO">
                        <label for="estrangeiro">Estrangeiro</label>
                    </div>
                </div><br>

                <div id="linhaform">
                    <div class="nomediv">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Mary" required>
                    </div>

                    <div class="nomediv">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Ex: Batista" required>
                    </div>
                </div><br>

                <div id="linhaform">
                    <div class="nomediv">
                        <label for="email">E-mail:</label>
                        <input type="email" id="" name="email" placeholder="Ex: mary@seuemail.com" required>
                    </div>
                    
                    <div class="nomediv">
                        <label for="">Senha:</label>
                        <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
                    </div>
                </div>
                
                <label for="">Número do CPF:</label>
                <input type="text" id="" name="" placeholder="Digite apenas números" maxlength="11" required><br><br>
   
                <div id="linhaform">
                    <div class="nomediv2">
                        <label for="sexo">Sexo:</label><br>
                        <select id="sexo" name="sexo">
                            <option value="selecione" selected>Selecione...</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                            <option value="prefironaodizer">Prefiro não dizer</option>
                        </select>
                    </div>
                    <div class="nomediv2">
                        <label for="">Telefone</label>
                        <input type="tel" id="" name="" placeholder="(XX) XXXXX-XXXX"  maxlength="11" required>
                    </div>
                    <div class="nomediv2">
                        <label for="data">Data de nascimento:</label>
                        <input type="date" id="data" name="data" required>
                    </div>
                </div>

                <h2>Meu endereço</h2>

                <div id="linhaform">
                    <div class="nomediv">
                        <label for="pais">País:</label><br>
                        <select id="pais" name="pais">
                            <option value="">Afeganistão</option>
                            <option value="">África do Sul</option>
                            <option value="">Albânia</option>
                            <option value="">Alemanha</option>
                            <option value="">Andorra</option>
                            <option value="">Angola</option>
                            <option value="">Antígua e Barbuda</option>
                            <option value="">Arábia Saudita</option>
                            <option value="">Argélia</option>
                            <option value="">Argentina</option>
                            <option value="">Armênia</option>
                            <option value="">Austrália</option>
                            <option value="">Áustria</option>
                            <option value="">Azerbaijão</option>
                            <option value="">Bahamas</option>
                            <option value="">Bahrein</option>
                            <option value="">Bangladesh</option>
                            <option value="">Barbados</option>
                            <option value="">Bélgica</option>
                            <option value="">Belize</option>
                            <option value="">Benin</option>
                            <option value="">Bielorrússia</option>
                            <option value="">Bolívia</option>
                            <option value="">Bósnia e Herzegovina</option>
                            <option value="">Botsuana</option>
                            <option value="" selected>Brasil</option>
                            <option value="">Brunei</option>
                            <option value="">Bulgária</option>
                            <option value="">Burkina Faso</option>
                            <option value="">Burundi</option>
                            <option value="">Butão</option>
                            <option value="">Cabo Verde</option>
                            <option value="">Camarões</option>
                            <option value="">Camboja</option>
                            <option value="">Canadá</option>
                            <option value="">Catar</option>
                            <option value="">Cazaquistão</option>
                            <option value="">Chade</option>
                            <option value="">Chile</option>
                            <option value="">China</option>
                            <option value="">Chipre</option>
                            <option value="">Colômbia</option>
                            <option value="">Comores</option>
                            <option value="">Coreia do Norte</option>
                            <option value="">Coreia do Sul</option>
                            <option value="">Costa do Marfim</option>
                            <option value="">Costa Rica</option>
                            <option value="">Croácia</option>
                            <option value="">Cuba</option>
                            <option value="">Dinamarca</option>
                            <option value="">Djibuti</option>
                            <option value="">Dominica</option>
                            <option value="">Egito</option>
                            <option value="">El Salvador</option>
                            <option value="">Emirados Árabes Unidos</option>
                            <option value="">Equador</option>
                            <option value="">Eritreia</option>
                            <option value="">Eslováquia</option>
                            <option value="">Eslovênia</option>
                            <option value="">Espanha</option>
                            <option value="">Essuatíni</option>
                            <option value="">Estados Unidos</option>
                            <option value="">Estônia</option>
                            <option value="">Etiópia</option>
                            <option value="">Fiji</option>
                            <option value="">Filipinas</option>
                            <option value="">Finlândia</option>
                            <option value="">França</option>
                            <option value="">Gabão</option>
                            <option value="">Gâmbia</option>
                            <option value="">Gana</option>
                            <option value="">Geórgia</option>
                            <option value="">Granada</option>
                            <option value="">Grécia</option>
                            <option value="">Guatemala</option>
                            <option value="">Guiana</option>
                            <option value="">Guiné</option>
                            <option value="">Guiné-Bissau</option>
                            <option value="">Guiné Equatorial</option>
                            <option value="">Haiti</option>
                            <option value="">Holanda</option>
                            <option value="">Honduras</option>
                            <option value="">Hungria</option>
                            <option value="">Iêmen</option>
                            <option value="">Ilhas Marshall</option>
                            <option value="">Ilhas Salomão</option>
                            <option value="">Índia</option>
                            <option value="">Indonésia</option>
                            <option value="">Irã</option>
                            <option value="">Iraque</option>
                            <option value="">Irlanda</option>
                            <option value="">Islândia</option>
                            <option value="">Israel</option>
                            <option value="">Itália</option>
                            <option value="">Jamaica</option>
                            <option value="">Japão</option>
                            <option value="">Jordânia</option>
                            <option value="">Kosovo</option>
                            <option value="">Kuwait</option>
                            <option value="">Laos</option>
                            <option value="">Lesoto</option>
                            <option value="">Letônia</option>
                            <option value="">Líbano</option>
                            <option value="">Libéria</option>
                            <option value="">Líbia</option>
                            <option value="">Liechtenstein</option>
                            <option value="">Lituânia</option>
                            <option value="">Luxemburgo</option>
                            <option value="">Macedônia do Norte</option>
                            <option value="">Madagascar</option>
                            <option value="">Malásia</option>
                            <option value="">Malauí</option>
                            <option value="">Maldivas</option>
                            <option value="">Mali</option>
                            <option value="">Malta</option>
                            <option value="">Marrocos</option>
                            <option value="">Maurício</option>
                            <option value="">Mauritânia</option>
                            <option value="">México</option>
                            <option value="">Micronésia</option>
                            <option value="">Moçambique</option>
                            <option value="">Mônaco</option>
                            <option value="">Mongólia</option>
                            <option value="">Montenegro</option>
                            <option value="">Mianmar</option>
                            <option value="">Namíbia</option>
                            <option value="">Nauru</option>
                            <option value="">Nepal</option>
                            <option value="">Nicarágua</option>
                            <option value="">Níger</option>
                            <option value="">Nigéria</option>
                            <option value="">Noruega</option>
                            <option value="">Nova Zelândia</option>
                            <option value="">Omã</option>
                            <option value="">Países Baixos</option>
                            <option value="">Palau</option>
                            <option value="">Panamá</option>
                            <option value="">Papua-Nova Guiné</option>
                            <option value="">Paquistão</option>
                            <option value="">Paraguai</option>
                            <option value="">Peru</option>
                            <option value="">Polônia</option>
                            <option value="">Portugal</option>
                            <option value="">Quênia</option>
                            <option value="">Quirguistão</option>
                            <option value="">Reino Unido</option>
                            <option value="">República Centro-Africana</option>
                            <option value="">República Democrática do Congo</option>
                            <option value="">República do Congo</option>
                            <option value="">República Dominicana</option>
                            <option value="">República Tcheca</option>
                            <option value="">Romênia</option>
                            <option value="">Ruanda</option>
                            <option value="">Rússia</option>
                            <option value="">Saara Ocidental</option>
                            <option value="">Samoa</option>
                            <option value="">San Marino</option>
                            <option value="">Santa Lúcia</option>
                            <option value="">São Cristóvão e Névis</option>
                            <option value="">São Tomé e Príncipe</option>
                            <option value="">São Vicente e Granadinas</option>
                            <option value="">Senegal</option>
                            <option value="">Serra Leoa</option>
                            <option value="">Sérvia</option>
                            <option value="">Seychelles</option>
                            <option value="">Singapura</option>
                            <option value="">Síria</option>
                            <option value="">Somália</option>
                            <option value="">Sri Lanka</option>
                            <option value="">Sudão</option>
                            <option value="">Sudão do Sul</option>
                            <option value="">Suécia</option>
                            <option value="">Suíça</option>
                            <option value="">Suriname</option>
                            <option value="">Tailândia</option>
                            <option value="">Tadjiquistão</option>
                            <option value="">Tanzânia</option>
                            <option value="">Timor-Leste</option>
                            <option value="">Togo</option>
                            <option value="">Tonga</option>
                            <option value="">Trinidad e Tobago</option>
                            <option value="">Tunísia</option>
                            <option value="">Turcomenistão</option>
                            <option value="">Turquia</option>
                            <option value="">Tuvalu</option>
                            <option value="">Ucrânia</option>
                            <option value="">Uganda</option>
                            <option value="">Uruguai</option>
                            <option value="">Uzbequistão</option>
                            <option value="">Vanuatu</option>
                            <option value="">Vaticano</option>
                            <option value="">Venezuela</option>
                            <option value="">Vietnã</option>
                            <option value="">Zâmbia</option>
                            <option value="">Zimbábue</option>
                        </select><br>
                    </div>
                    <div class="nomediv">
                        <label for="estado">Estado:</label><br>
                        <select id="estado" name="estado">
                            <option value="">AC</option>
                            <option value="">AL</option>
                            <option value="">AP</option>
                            <option value="">AM</option>
                            <option value="">BA</option>
                            <option value="">CE</option>
                            <option value="">DF</option>
                            <option value="">ES</option>
                            <option value="">GO</option>
                            <option value="">MA</option>
                            <option value="">MT</option>
                            <option value="">MS</option>
                            <option value="">MG</option>
                            <option value="">PA</option>
                            <option value="">PB</option>
                            <option value="">PR</option>
                            <option value="">PE</option>
                            <option value="">PI</option>
                            <option value="">RJ</option>
                            <option value="">RN</option>
                            <option value="">RS</option>
                            <option value="">RO</option>
                            <option value="">RR</option>
                            <option value="">SC</option>
                            <option value="">SP</option>
                            <option value="">SE</option>
                            <option value="">TO</option>
                        </select><br>
                    </div>
                </div>
                            
                <label for="endereco">Endereço:</label><br>
                <input type="text" id="endereco" name="endereco" required><br>

                <label for="">Bairro</label><br>
                <input type="text" id="" name="" value="" required><br>

                <label for="">Ponto de referência</label><br>
                <input type="text" id="" name="" value="" required><br>

                <input type="checkbox" id="notificacao" name="notificacao" value="notificacao">
                <label for="notificacao"> Desejo receber e-mails de novidades sobre Mary</label><br><br>
                <div class="sub">
                    <input type="submit" value="Finalizar cadastro">
                </div>
            </div>
        </div>
    </form>

    <div class="rodape">
        <div id="rodape1"></div>
        <div id="rodape2"></div>
        <div id="rodape3"></div>
        <div id="rodape4"></div>
    </div>
</body>

</html>