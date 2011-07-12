<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'Nenhum usuário registrado com este nome de usuário. Se você deseja adicionar um ban não ligado à um nome de usuário específico apenas deixe o nome de usuário em branco.',
'No user ID message'		=>	'Nenhum usuário registrado com esta ID.',
'User is admin message'		=>	'O usuário %s é um administrador e não pode ser banido. Se você deseja banir um administrador, precisa primeiro rebaixá-lo para usuário.',
'User is mod message'		=>	'O usuário %s é um moderador e não pode ser banido. Se você deseja banir um moderador, precisa primeiro rebaixá-lo para usuário.',
'Must enter message'		=>	'Você deve fornecer um nome de usuário, endereço IP ou endereço de email (ao menos).',
'Cannot ban guest message'	=>	'O usuário visitante não pode ser banido.',
'Invalid IP message'		=>	'Você forneceu um endereço ou faixa de endereços IP inválido.',
'Invalid e-mail message'	=>	'O endereço de email (ex. usuário@domínio.com.br) ou domínio de endereço de email (ex. domínio.com.br) fornecido é inválido.',
'Invalid date message'		=>	'Você forneceu uma data de expiração inválida.',
'Invalid date reasons'		=>	'O formato deveria ser AAAA-MM-DD e a data deve ser de ao menos um dia no futuro.',
'Ban added redirect'		=>	'Banimento adicionado. Redirecionando …' ,
'Ban edited redirect'		=>	'Banimento editado. Redirecionando …',
'Ban removed redirect'		=>	'Banimento removido. Redirecionando …',

'New ban head'				=>	'Novo banimento',
'Add ban subhead'			=>	'Adicionar banimento',
'Username label'			=>	'Nome de usuário',
'Username help'				=>	'O nome de usuário a ser banido (insensível à caixa).',
'Username advanced help'	=>	'O nome de usuário a ser banido (insensível à caixa). A próxima página lhe permitirá definir um IP e email personalizados. Se você deseja banir um email ou endereço/faixa de endereços IP específicos apenas deixe em branco.',

'Ban search head'			=>	'Pesquisar banimento',
'Ban search subhead'		=>	'Forneça o critério de pesquisa',
'Ban search info'			=>	'Pesquisar por banimentos no banco de dados. Você pode fornecer um ou mais termos de pesquisa. Curingas na forma de asteriscos (*) são aceitos. Para listar todos os banimentos deixe todos os campos em branco.',
'Date help'					=>	'(aaaa-mm-dd)',
'Message label'				=>	'Mensagem',
'Expire after label'		=>	'Expirar depois',
'Expire before label'		=>	'Expirar antes',
'Order by label'			=>	'Ordenar por',
'Order by username'			=>	'Nome de usuário',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'Email',
'Order by expire'			=>	'Data de expiração',
'Ascending'					=>	'Ascendente',
'Descending'				=>	'Descendente',
'Submit search'				=>	'Pesquisar',

'E-mail label'				=>	'Email',
'E-mail help'				=>	'O email ou domínio de email que você deseja banir (ex. alguem@algumlugar.com.br ou algumlugar.com.br). Veja "Permitir endereços de email banidos" em Permissões para obter mais informações.',
'IP label'					=>	'Endereço IP/Faixa de endereços IP',
'IP help'					=>	'O endereço IP ou faixa de endereços IP que você deseja banir (ex. 150.11.110.1 ou 150.11.110). Separe os endereços com espaços. Se um IP já estiver listado significa que é o último IP conhecido do usuário registrado no banco de dados.',
'IP help link'				=>	'Clique %s para ver estatísticas de IP para este usuário.',
'Ban advanced head'			=>	'Configurações avançadas de banimento',
'Ban advanced subhead'		=>	'Completar banimento com IP e email',
'Ban message label'			=>	'Mensagem de banimento',
'Ban message help'			=>	'Uma mensagem que será exibida ao usuário banido quando visitar o fórum.',
'Message expiry subhead'	=>	'Mensagem e expiração do banimento',
'Ban IP range info'			=>	'Você deve ser cuidadoso ao banir uma faixa de endereços IP devido a possibilidade de haver múltiplos usuários na faixa de IP definida.',
'Expire date label'			=>	'Data de expiração',
'Expire date help'			=>	'A data em que este banimento deverá ser automaticamente removido (formato: aaaa-mm-dd). Deixe em branco para desativar a remoção automática.',

'Results head'				=>	'Resultados da Pesquisa',
'Results username head'		=>	'Nome de usuário',
'Results e-mail head'		=>	'Email',
'Results IP address head'	=>	'IP/Faixa de IP',
'Results expire head'		=>	'Expira',
'Results message head'		=>	'Mensagem',
'Results banned by head'	=>	'Banido por',
'Results actions head'		=>	'Ações',
'No match'					=>	'Nenhum resultado',
'Unknown'					=>	'Desconhecido',

);