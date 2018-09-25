<?PHP
# Account Maker Config
$config['site']['serverPath'] = "C:/Users/John e Milena/Desktop/Home/Mega-Baiak8.60/";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(1 => 'Venore', 2 => 'Thais', 3 => 'Kazordoon', 4 => 'Carlin', 5 => 'Ab Dendriel', 6 => 'Rookgaard', 7 => 'Liberty Bay', 8 => 'Port Hope', 9 => 'Ankrahmun', 10 => 'Darashia', 11 => 'Edron', 12 => 'Svargrond', 13 => 'Yalahar', 14 => 'Farmine', 15 => 'Gray Beach', 16 => 'Roshamuul', 30 => 'Rathleton', 34 => 'Dawnport');

$config['site']['outfit_images_url'] = 'http://outfit-images.ots.me/animatedOutfitsFideraGlobal/animoutfit.php';
$config['site']['addons_images_url'] = 'images/items/';
$config['site']['addons_images_extension'] = '.gif';
$config['site']['mounts_images_url'] = 'images/items/';
$config['site']['mounts_images_extension'] = '.gif';
$config['site']['addons_images_url'] = 'images/addons/';
$config['site']['addons_images_extension'] = '.gif';
$config['site']['mounts_images_url'] = 'images/mounts/';
$config['site']['mounts_images_extension'] = '.gif';
$config['site']['item_images_url'] = '/images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = 'http://flag-images.ots.me/';
$config['site']['flag_images_extension'] = '.png';

# Upcoming Events
$config['site']['event_count'] = array("CTF Event" => array("Mon,Tue,Wed,Thu,Fri,Sat,Sun", "23:00"), 
                                       "Battlefield Event" => array("Tue,Wed,Thu,Fri,Sat,Sun", "21:30"),
                                       "Server Save" => array("Tue,Wed,Thu,Fri,Sat,Sun", "06:00")
                                );
								
# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = true;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 0;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'] = array(6);
$config['site']['max_players_per_account'] = 300;


# Emails Config
$config['site']['lost_acc'] = true; # LOST ACC? SIM (TRUE) OU NÃO (FALSE)
$config['site']['send_emails'] = false; # ENVIAR EMAILS? SIM (TRUE) OU NÃO (FALSE)
$config['site']['mail_address'] = "zoin10k@gmail.com"; # SEU EMAIL (TEM QUE SER GMAIL)
$config['site']['smtp_enabled'] = true; # NÃO MUDAR
$config['site']['smtp_host'] = "zoin10k@gmail.com"; # COLOCAR 'smtp.gmail.com'
$config['site']['smtp_port'] = 25; # tenta a 25 mesmo, se não der tenta 465
$config['site']['smtp_auth'] = true; # não mudar
$config['site']['smtp_user'] = "zoin10k@gmail.com";  # SEU EMAIL (TEM QUE SER GMAIL)
$config['site']['smtp_pass'] = "@ZP?+PF]L@*=";  # sua senha


# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 1;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array();
$config['site']['show_skills_info'] = false;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = false;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 1;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 9999;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5, 6);
$config['site']['accounts_hidden'] = array(1);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiacom';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = false;
$config['site']['serverinfo_page'] = true;

#SHOP GUILD
$config['site']['shopguild_system'] = 1;
$config['site']['access_adminguild_panel'] = 8347;

############################
## PagSeguro/Paypal Email ##
############################
$config['pagseguro']['email'] = 'zoin10k@gmail.com'; ## EMAIL PAGSEGURO ##
$config['paypal']['email'] = 'zoin10k@gmail.com'; ## EMAIL PAYPAL ##

## Formas de pagamento [1 = ativo | 0 = inativo] ##
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 1;
$config['site']['caixa'] = 1;
$config['site']['bonusPoints'] = 0;

#####################
## Nome do Produto ##
#####################
$config['pagseguro']['produtoNome'] = 'Tibia Coins';

#####################
## PICPAY JOW LOGAN ##
#####################

$config['site']['picpay'] = 1;
$config['site']['nomepicpay'] = '@Johnheverton';
$config['site']['linkqr'] = '<p style="text-align: center;"><img src="https://s7.postimg.cc/itddywkfv/download_QR.png" alt="" width="158" height="158" /></p></p>';

#############################
######### C A I X A ########
#############################
#! Informações do pagamento com caixa economica federal !#
$config['site']['CaixaCont'] = "
Conta Poupanca 013: 4536-0
Ag: 4690
Favorecido: John Heverton Paulino Bezerra

"; 

$config['archez']['secret'] = array(2, 6, 7, 13, 16, 17, 18, 23, 24, 26, 29, 30, 31, 32, 34, 35, 37, 43, 44, 46, 51, 53, 54, 62, 63, 65, 66, 68, 73, 80, 81, 82, 83);
$config['archez']['achievements'] = array(
    1 => 'Allow Cookies?',
    2 => 'Backpack Tourist',
    3 => 'Bearhugger',
    4 => 'Bone Brother',
    5 => 'Chorister',
    6 => 'Fountain of Life',
    7 => 'Here, Fishy Fishy!',
    8 => 'Honorary Barbarian',
    9 => 'Huntsman',
    10 => 'Just in Time',
    11 => 'Matchmaker',
    12 => 'Nightmare Knight',
    13 => 'Party Animal',
    14 => 'Secret Agent',
    15 => 'Talented Dancer',
    16 => 'Territorial',
    17 => 'Worm Whacker',
    18 => 'Allowance Collector',
    19 => 'Amateur Actor',
    20 => 'Animal Activist',
    21 => 'Beach Tamer',
    22 => 'Blessed!',
    23 => 'Exquisite Taste',
    24 => 'Fireworks in the Sky',
    25 => 'Greenhorn',
    26 => 'Jinx',
    27 => 'Lucid Dreamer',
    28 => 'Mathemagician',
    29 => 'Masquerader',
    30 => 'Ministrel',
    31 => 'Poet Laureate',
    32 => 'Quick as a Turtle',
    33 => 'Sea Scout',
    34 => 'Steampunked',
    35 => 'Superstitios',
    36 => 'The Milkman',
    37 => 'Turncoat',
    38 => 'Vive la Resistance',
    39 => 'Archpostman',
    40 => 'Clay Fighter',
    41 => 'Efreet Ally',
    42 => 'Ghostwisperer',
    43 => 'His True Face',
    44 => 'Ice Sculptor',
    45 => 'King Tibanus Fan',
    46 => 'Marblelous',
    47 => 'Marid Ally',
    48 => 'Passionate Kisser',
    49 => 'Perfect Fool',
    50 => 'Recognised Trader',
    51 => 'Rockstar',
    52 => 'Scrapper',
    53 => 'Vanity',
    54 => 'Wayfarer',
    55 => 'Champion of Chazorai',
    56 => 'Culinary Master',
    57 => 'Explorer',
    58 => 'Follower of Azerus',
    59 => 'Follower of Palimuth',
    60 => 'Friend of the Apes',
    61 => 'Golem in the Gears',
    62 => 'High-Flyer',
    63 => 'Interior Decorator',
    64 => 'Master Thief',
    65 => 'Polisher',
    66 => 'Potion Addict',
    67 => 'Ruthless',
    68 => 'Ship\'s Kobold',
    69 => 'Top AVIN Agent',
    70 => 'Top CGB Agent',
    71 => 'Top TBI Agent',
    72 => 'Annihilator',
    73 => 'Castlemania',
    74 => 'Elite Hunter',
    75 => 'High Inquisitor',
    76 => 'Jamjam',
    77 => 'Lord of the Elements',
    78 => 'Warlord of Svargrond',
    79 => 'Master of the Nexus',
    80 => 'Razing!',
    81 => 'Dread Lord',
    82 => 'Lord Protector',
    83 => 'Herbicide'
);