<div id="home" class="intro route bg-image" style="background-image: url('<?= base_url('assets/img/sendgrid/sendgrid_logo2.png') ?>'); background-repeat: no-repeat; background-size: cover;">
</div>
<div class="container text-justify">
  <div class="col-sm-12 pt-4"><br>
    <div class="about-me pt-4 pt-md-0">
      <div class="title-box-2">
        <h5 class="title-left">
          O que é?
        </h5>
      </div>
      <p class="lead">
        A API usada na construção desse site é a dona da maior velocidade de entrega de e-mails em escala, não interrompendo o crescimento dos negócios com e-mails lentos
      </p>
      <p class="lead">
        O SendGrid é líder em entrega confiável de emails. Uma poderosa solução baseada em nuvem envia e-mails
        transacionais e de marketing para mais de 82.000 clientes pagantes,
        permitindo que eles se concentrem em seus negócios, em vez de sua infra-estrutura de e-mail.
        Oferece entrega de e-mail transacional, escalabilidade e análise em tempo real confiáveis com APIsflexíveis que facilitam
        a integração personalizada.
      </p>
    </div>
  </div>
  <br><br>
  <div class="col-sm-12 pt-4">
    <div class="about-me pt-4 pt-md-0">
      <div class="title-box-2">
        <h5 class="title-left">
          Planos
        </h5>
      </div>
      <img src="<?= base_url('assets/img/sendgrid/sendgrid_plans.png') ?>" class="img-fluid z-depth-1-half" alt="planos">
    </div>
  </div>
  <br><br>
  <div class="col-sm-12 pt-4">
    <div class="about-me pt-4 pt-md-0">
      <div class="title-box-2">
        <h5 class="title-left">
          Começando com SendGrid API
        </h5>
      </div>
      <p class="lead">
        Para enviar um email, crie uma chamada da API que deve ter os seguintes componentes:
        <ul>
          <li class="lead">Um host. O host para solicitações da API da Web v3 é sempre https://api.sendgrid.com/v3/</li>
          <li class="lead">Um cabeçalho de autorização "Header"</li>
          <li class="lead">Uma chave de API dentro do Header</li>
          <li class="lead">Um pedido "Request". Ao enviar dados para um recurso via POST ou PUT, você deve enviar o seu arquivo em JSON.</li>
        </ul>
      </p>
    </div>
  </div>
  <br><br>
  <div class="col-sm-12 pt-4">
    <div class="about-me pt-4 pt-md-0">
      <div class="title-box-2">
        <h5 class="title-left">
          Como enviar
        </h5>
      </div>
      <p class="lead">
        Por terminal:
      </p>
      <p class="pl-3">
        curl --request POST \
        <br>
        --url https://api.sendgrid.com/v3/mail/send \
        <br>
        --header 'authorization: Bearer YOUR_API_KEY \
        <br>
        --header 'content-type: application/json' \
        <br>
        --data '{"personalizations":[{"to":[{"email":"john.doe@example.com","name":"John Doe"}],"subject":"Hello, World!"}],"content": [{"type": "text/plain", "value": "Heya!"}],"from":{"email":"sam.smith@example.com","name":"Sam Smith"},"reply_to":{"email":"sam.smith@example.com","name":"Sam Smith"}}'
      </p>
      <br>
      <p class="lead">
        <ol>
          <li class="lead">Copie o exemplo de curl acima.</li>
          <li class="lead">Cole a "curl call" no seu editor de texto favorito</li>
          <li class="lead">Copie sua chave de API e cole-a no header</li>
          <li class="lead">Na seção de dados, especifique os nomes e endereços de email "para", "de" e "responder a" e insira um assunto.</li>
          <li class="lead">Copie o código e cole-o no seu terminal.</li>
          <li class="lead">Aperte enter e confira a caixa de entrada do email enviado.</li>
        </ol>
      </p>
      <br>
      <p class="lead">
        Código PHP:
      </p>
      <p class="lead">
        <ol>
          <li class="lead">Crie arrays com as informações usadas pela forma de envio por terminal</li>
          <img src="<?= base_url('assets/img/sendgrid/sendgrid_php1.png') ?>" class="img-fluid z-depth-1-half pb-4" alt="php1">
          <li class="lead">Utilize as funções de cURL do PHP para consumir a API</li>
          <img src="<?= base_url('assets/img/sendgrid/sendgrid_php2.png') ?>" class="img-fluid z-depth-1-half pb-4" alt="php2">
          <li class="lead">Execute o PHP.</li>
        </ol>
      </p>
    </div>
  </div>
  <br><br>
</div>