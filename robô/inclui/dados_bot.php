<?php

define ( 'MODO_DESENVOLVEDOR' , false ); // no modo desenvolvedor só os administradores podem usar o bot

// TOKEN DO BOT
define ( 'TOKEN_BOT' , '5264175510:AAGjGXMwaES9IyCeFi07JAVaBddsojSEeyY' );

// CHAVE de API https://sms-activate.ru/en/api2
define ( 'KEY_SMS' , 'e787282b266b72e43200bcAed028f229' );

// token do mercado pago
define ( 'ACCESS_TOKEN_MERCADO_PAGO' , 'APP_USR-8425933346868372-101701-ba6ca5933c67ecefb4d22d643def99c2-727948780' );

// lucro de lucro sobre os valores cobrados no site, já feita a conversão
define ( 'PORCENTAGEM_LUCRO' , 100 ); // %

// lista de ids de adms
define ( 'ADMS' , [ 1490261357 ]);

define ( 'CHAT_ID_NOTIFICACAO' , 'ID DO CHAT CANAL PRA RECEBER AS NOTIFY DE RESGATES' ); // onde irá como notificação de resgate de saldos (opcional)

define ( 'GRUPO_ID' , 'AQUI VAI SER DO GRUPO PUBLICO EO BOT TEM QUE ESTAR NELE' ); // grupo de bot

// paises em que o bot vai atender,
// limitar a 160 pais por conta do telegram não podem além disso
defina ( 'PAISES' , [
	'187' => '🇺🇸 EUA' ,
	'0' => '🇷🇺 Rússia' ,
	'87' => '🇵🇾 Paraguai' ,
	'86' => '🇮🇹 Itália' ,
	'117' => '🇵🇹Portugal' ,
	'73' => '🇧🇷 Brasil' ,
	'0' => '🇷🇺 Rússia' ,
	'1' => '🇺🇦 Ucrânia' ,
	'2' => '🇰🇿 Cazaquistão' ,
	'3' => '🇨🇳 China' ,
	'4' => '🇵🇭 Filipinas' ,
	'5' => '🇲🇲Miamar' ,
	'6' => '🇮🇩 Indonésia' ,
	'7' => '🇲🇾 Malásia' ,
	'8' => '🇰🇪 Quênia' ,
	'9' => '🇹🇿 Tanzânia' ,
	'10' => '🇻🇳 Viatinã' ,
	'13' => '🇮🇱 Israel' ,
	'14' => '🇭🇰 Hong Kong' ,
	'15' => '🇵🇱 Polônia' ,
	'16' => '🇬🇧 Reino Unido' ,
	'19' => '🇳🇪 Nigéria' ,
	'21' => '🇪🇬 Egito' ,
	'22' => '🇮🇳 Índia' ,
	'23' => '🇮🇪 Irlanda' ,
	'24' => '🇰🇭 Camboja' ,
	'25' => '🇱🇦 Laus' ,
	'26' => '🇭🇹 Haiti' ,
	'28' => '🇬🇲 Gâmbia' ,
	'29' => '🇷🇸 Sérvia' ,
	'30' => '🏳️�1�7�🌄1�7 Iêmen' ,
	'31' => '🇿🇦 África do Sul' ,
	'32' => '🇷🇴 Romênia' ,
	'33' => '🇨🇴 Colômbia' ,
	'34' => '🇪🇪 Estônia' ,
	'35' => '🇦🇿 Azerbaijão' ,
	'36' => '🇨🇦 Canadá' ,
	'37' => '🇲🇦 Marrocos' ,
	'38' => '🇬🇭 Gana' ,
	'39' => '🇦🇷 Argentina' ,
	'40' => '🇺🇿 Uzbequistão' ,
	'41' => '🇨🇲 Camarões' ,
	'43' => '🇩🇪 Alemanha' ,
	'44' => '🇱🇹 lituânia' ,
	'45' => '🇭🇷 Croácia' ,
	'46' => '🇸🇪 Suécia' ,
	'47' => '🇮🇶 Iraque' ,
	'48' => '🇧🇶 Paises Baixos' ,
	'49' => '🇱🇻 Letônia' ,
	'50' => '🇦🇹 Austrália' ,
	'52' => '🇹🇭 Tailândia' ,
	'53' => '🇸🇦 Arábia Saudita' ,
	'54' => '🇲🇽 México' ,
	'55' => '🇹🇼 Taiwan' ,
	'56' => '🇪🇸 Espanha' ,
	'57' => '🇮🇷 Irã' ,
	'60' => '🇧🇩 Bangladesh' ,
	'61' => '🇸🇳 Senegal' ,
	'62' => '🇵🇪 Peru'
]);

/*
	Quando o sistema reservau esse sistema por X minutos o que cancelar mais de X serviço do mesmo serviço NO MESMO PAÍS durante as próximas 12h e remover o saldo do usuário em cada bloqueio.
	Para remover o bloqueio use /removeblock (id usuario)
*/
define ( 'ANTI_CANCELAMENTO' , true ); // ativa (true) ou desativa (false) sistema de verificação de mau cancelamento
define ( 'TEMPO_BLOCK' , 1800 ); // meia hora 1800 segundos
define ( 'CANCELAMENTO_MINIMO' , 3 ); // quantidae mínimos de cancelamentos DO MESMO SERVIÇO para bloquear um usuário
define ( 'VALOR_DESCONTO_BLOCK' , 1 ); // valor descontado do saldo em cada bloqueio no bot

// SISTEMA DE BONÛS

// bônus
define ( 'BÔNUS' , 0 ); // 10%

define ( 'STATUS_BONUS_ADICAO' , false ); // status do sistema de bônus por sdicionar usuário
define ( 'BONUS_ADICAO' , 0,50 ); // Bônus por adicionar usuário no nosso grupo, em reais
define ( 'MINIMO_ADICAO' , 50 ); // Mínimo de usuários adicionados para ganhar bônus

// SISTEMA AFILIADOS

define ( 'STATUS_AFILIADO' , true );
define ( 'BONUS_AFILIADO' , 15 ); // 15% do valor de recarga do indicado
