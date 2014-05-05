<?php
// Copyright 2011 Toby Zerner, Simon Zerner
// This file is part of esoTalk. Please see the included license file for usage information.

ET::$languageInfo["Serbian"] = array(
	"locale" => "sr",
	"name" => "Serbian",
	"description" => "Serbian Cyrilic Translation.",
	"version" => ESOTALK_VERSION,
	"author" => "Markus Wolf",
	"authorEmail" => "vukwap@gmail.com",
	"authorURL" => "http://vukwap.wordpress.com",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "јуче";
$definitions["%d days ago"] = "пре %d дана";
$definitions["%d hour ago"] = "пре 1 сат";
$definitions["%d hours ago"] = "пре %d сати";
$definitions["%d minute ago"] = "пре 1 минут";
$definitions["%d minutes ago"] = "пре %d минута";
$definitions["%d month ago"] = "пре 1 месец";
$definitions["%d months ago"] = "пре %d месеца";
$definitions["%d second ago"] = "пре 1 секунду";
$definitions["%d seconds ago"] = "пре %d секунди";
$definitions["%d week ago"] = "прошле седмице";
$definitions["%d weeks ago"] = "пре %d седмице";
$definitions["%d year ago"] = "прошле године";
$definitions["%d years ago"] = "пре %d године";

$definitions["%s and %s"] = "%s и %s";
$definitions["%s can view this conversation."] = "%s може да види ову конверзацију.";
$definitions["%s changed %s's group to %s."] = "%s је променио %s's групу у%s.";
$definitions["%s changed your group to %s."] = "%s је променио твоју групу у %s.";
$definitions["%s conversation"] = "%s конверзација";
$definitions["%s conversations"] = "%s конверзације";
$definitions["%s invited you to %s."] = "%s те је позвао у %s.";
$definitions["%s joined the forum."] = "%s се придружио форуму.";
$definitions["%s post"] = "%s коментар";
$definitions["%s posted %s"] = "%s је коментарисао %s";
$definitions["%s posted in %s."] = "%s је коментарисао у %s.";
$definitions["%s posts"] = "%s коментара";
$definitions["%s reply"] = "%s одговор";
$definitions["%s replies"] = "%s одговора";
$definitions["%s Settings"] = "%s Подешавања";
$definitions["%s started the conversation %s."] = "%s је започео конверзацију %s.";
$definitions["%s tagged you in a post."] = "%s вас је споменуо у коментару.";
$definitions["%s will be able to view this conversation."] = "%s може да види ову конверзацију.";
$definitions["%s will be able to:"] = "%s биће у могућности да:";

$definitions["Success!"] = "Успешно!";
$definitions["A new version of esoTalk (%s) is available."] = "Нова верзија esoTalk (%s) је доступна.";
$definitions["a private conversation"] = "приватна конверзација";
$definitions["Access the administrator control panel."] = "Приступ администраторском панелу.";
$definitions["Account type"] = "Тип налога";
$definitions["Activate"] = "Активирај";
$definitions["Activity"] = "Активност";
$definitions["Add"] = "Додај";
$definitions["Administration"] = "Админ Панел";
$definitions["Administrator email"] = "Е-Маил Администратора";
$definitions["Administrator password"] = "Лозинка Администратора";
$definitions["Administrator username"] = "Надимак Администратора";
$definitions["Advanced options"] = "Напредне опције";
$definitions["All Channels"] = "Сви Канали";
$definitions["Allow members to edit their own posts:"] = "Дозволи члановима да мењају своје коментаре:";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "Већ имаш налог? <a href='%s' class='link-login'>Пријави се!</a>";
$definitions["Appearance"] = "Изглед";
$definitions["Automatically star conversations that I reply to"] = "Аутоматски прати конверзације на које коментаришем";
$definitions["Avatar"] = "Аватар";

$definitions["Back to channels"] = "Назад на канале";
$definitions["Back to conversation"] = "Назад на конверзацију";
$definitions["Back to member"] = "Назад на члана";
$definitions["Back to members"] = "Назад на чланове";
$definitions["Back to search"] = "Назад на претрагу";
$definitions["Background color"] = "Боја позадине";
$definitions["Background image"] = "Позадинска слика";
$definitions["Base URL"] = "УРЛ Форума";
$definitions["Bold"] = "Подебљано";
$definitions["By %s"] = "Од %s";

$definitions["Can suspend/unsuspend members"] = "Може да суспендује/одсуспендује чланове";
$definitions["Cancel"] = "Поништи";
$definitions["Change %s's Permissions"] = "Измени члану %s дозволе";
$definitions["Change avatar"] = "Промени аватар";
$definitions["Change Channel"] = "Промени Канал";
$definitions["Change channel"] = "Промени канал";
$definitions["Change username"] = "Промени надимак";
$definitions["Change Password or Email"] = "Промени лозинку или е-маил";
$definitions["Change Password"] = "Промени Лозинку";
$definitions["Change password"] = "Промени лозинку";
$definitions["Change permissions"] = "Промени дозволе";
$definitions["Change"] = "Промени";
$definitions["Channel description"] = "Опис канала";
$definitions["Channel List"] = "Листа канала";
$definitions["Channel title"] = "Наслов канала";
$definitions["Channel slug"] = "Канал адреса";
$definitions["Channels"] = "Канали";
$definitions["Choose a secure password of at least %s characters"] = "Изабер сигурну лозинку од најмање %s карактера";
$definitions["Choose what people will see when they first visit your forum."] = "Изабери шта ће посетиоци прво видети када дођу на форум.";
$definitions["Click on a member's name to remove them."] = "Кликни на име члана да га обришеш.";
$definitions["Close registration"] = "Затвори регистрацију";
$definitions["Confirm password"] = "Потврди лозинку";
$definitions["Context"] = "Контекст";
$definitions["Controls"] = "Контроле";
$definitions["Conversation"] = "Конверзација";
$definitions["Conversations participated in"] = "Конверзације у којима учествујеш";
$definitions["Conversations started"] = "Започете конверзације";
$definitions["Conversations"] = "Конверзације";
$definitions["Copy permissions from"] = "Копирај дозволе из";
$definitions["Create Channel"] = "Направи Канал";
$definitions["Create Group"] = "Направи Групу";
$definitions["Create Member"] = "Направи Члана";
$definitions["Customize how users can become members of your forum."] = "Подеси како посетиоци могу постати чланови.";
$definitions["Customize your forum's appearance"] = "Подеси изглед форума";

$definitions["Dashboard"] = "Радна Плоча";
$definitions["Default forum language"] = "Подразумевани језик форума";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Обриши</strong> све конверзације заувек.";
$definitions["Delete Channel"] = "Обриши канал";
$definitions["Delete conversation"] = "Обриши конверзације";
$definitions["Delete member"] = "Обриши члана";
$definitions["Delete Member"] = "Обриши Члана";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Обриши коментаре овог члана.</strong> Сви коментари овог члана ће бити обрисани,али моћи ће се повратити касније.";
$definitions["Delete"] = "Обриши";
$definitions["Deleted %s by %s"] = "Обрисано %s од %s";
$definitions["Disable"] = "Онемогући";
$definitions["Discard"] = "Одбаци";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "Немаш налог? <a href='%s' class='link-join'>Региструј Се!</a>";
$definitions["Don't repeat"] = "Не понављај";

$definitions["Edit Channel"] = "Измени Канал";
$definitions["Edit Group"] = "Измени Групу";
$definitions["Edit member groups"] = "Измени групу чланова";
$definitions["Edit your profile"] = "Измени свој профил";
$definitions["Edit"] = "Измени";
$definitions["Edited %s by %s"] = "Измењено %s од %s";
$definitions["Editing permissions"] = "Измени дозволе";
$definitions["Email me when I'm added to a private conversation"] = "Пошаљи ми е-маил када сам додат у приватну конверзацију";
$definitions["Email me when someone posts in a conversation I have starred"] = "Пошаљи ми е-маил када неко пише у мојо конверзацији";
$definitions["Email"] = "Е-Маил";
$definitions["Enable"] = "Омогући";
$definitions["Enabled"] = "Омогућено";
$definitions["Enter a conversation title"] = "Унеси наслов конверзације";
$definitions["Error"] = "Грешка";
$definitions["esoTalk version"] = "esoTalk верзија";
$definitions["Everyone"] = "Свако";

$definitions["Fatal Error"] = "Ух! Фатална грешка...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "Филтер по имену или групи...";
$definitions["Filter conversations..."] = "Филтер конверзације...";
$definitions["Find this post"] = "Пронађи овај коментар";
$definitions["First posted"] = "Прво коментарисано";
$definitions["Follow to receive notifications"] = "Прати да примиш обавештења";
$definitions["For %s seconds"] = "За %s секунди";
$definitions["Forever"] = "Заувек";
$definitions["Forgot?"] = "Заборављена?";
$definitions["Forgot Password"] = "Заборављена Лозинка";
$definitions["Forum header"] = "Врх Форума";
$definitions["Forum language"] = "Језик Форума";
$definitions["Forum Settings"] = "Форум Подешавања";
$definitions["Forum Statistics"] = "Статистика Форума";
$definitions["Forum title"] = "Наслов Форума";
$definitions["forumDescription"] = "%s је форум о %s, и %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Дај овој групи дозволе модератора за све постојеће канале";
$definitions["Global permissions"] = "Глобалне дозволе";
$definitions["Go to top"] = "Иди на врх";
$definitions["Group name"] = "Име групе";
$definitions["group.administrator"] = "Администратор";
$definitions["group.administrator.plural"] = "Администратори";
$definitions["group.guest"] = "Гост";
$definitions["group.guest.plural"] = "Гости";
$definitions["group.member"] = "Члан";
$definitions["group.member.plural"] = "Чланови";
$definitions["group.Moderator"] = "Модератор";
$definitions["group.Moderator.plural"] = "Модератори";
$definitions["group.suspended"] = "Суспендован";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Групе служе за категоризацију чланова и давање одређених привилегија.";
$definitions["Groups"] = "Групе";

$definitions["Header"] = "Наслов";
$definitions["Header color"] = "Боја наслова";
$definitions["Hide"] = "Сакриј";
$definitions["Home page"] = "Почетна страница";
$definitions["HTML is allowed."] = "HTML је дозвољен.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "Уколико наиђете на неки проблем, или вам је потребна помоћ око инсталације посетите <a href='%s'>esoTalk форум подршке</a>.";
$definitions["Install esoTalk"] = "Инсталирај esoTalk";
$definitions["Install My Forum"] = "Инсталирај МојФорум";
$definitions["Installed Languages"] = "Инсталирани Језици";
$definitions["Installed Plugins"] = "Инсталирани Додаци";
$definitions["Installed plugins"] = "Инсталирани додаци";
$definitions["Installed Skins"] = "Инсталиране Теме";
$definitions["Installed skins"] = "Инсталиране теме";
$definitions["is %s"] = "је %s";

$definitions["Joined"] = "Придружен";
$definitions["Jump to last"] = "Иди на последњу";
$definitions["Jump to unread"] = "Иди на непрочитано";
$definitions["just now"] = "управо сада";

$definitions["Keep me logged in"] = "Остави ме пријављеног";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Сачувај коментаре овог члана.</strong> Сви коментари овог члана ће остати нетакнути, али ће писати [обрисан] као аутор.";

$definitions["label.draft"] = "Нацрти";
$definitions["label.locked"] = "Закључано";
$definitions["label.muted"] = "Утишано";
$definitions["label.private"] = "Приватно";
$definitions["label.sticky"] = "Окачено";
$definitions["Labels"] = "Наслови";
$definitions["Last active"] = "Активан";
$definitions["Last active %s"] = "Последњи пут активан %s";
$definitions["Latest News"] = "Последње Новости";
$definitions["Loading..."] = "Учитавање...";
$definitions["Lock"] = "Закљуцано";
$definitions["Log In"] = "Пријава";
$definitions["Log Out"] = "Одјава";

$definitions["Make member and online list visible to:"] = "Подеси листу чланова и листу присутних видљиву за:";
$definitions["Manage Groups"] = "Управљај Групама";
$definitions["Manage Languages"] = "Управљај Језицима";
$definitions["Manage your forum's channels (categories)"] = "Управљај Каналима (категоријама)";
$definitions["Mark as read"] = "Означи као прочитано";
$definitions["Mark all as read"] = "Означи све као прочитано";
$definitions["Mark listed as read"] = "Означи приказано као прочитано";
$definitions["Maximum size of %s. %s."] = "Максимална величина %s. %s.";
$definitions["Member groups"] = "Групе Чланова";
$definitions["Member list"] = "Листа Чланова";
$definitions["Member List"] = "Листа Чланова";
$definitions["Member privacy"] = "Приватност Чланова";
$definitions["Members Allowed to View this Conversation"] = "Чланови који могу да виде ову конверзацију";
$definitions["Members Online"] = "Присутно Чланова";
$definitions["Members"] = "Чланови";
$definitions["Mobile skin"] = "Мобилна тема";
$definitions["Moderate"] = "Измени";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Премести</strong> конверзације у следећи канал:";
$definitions["Mute conversation"] = "Утишај конверзације";
$definitions["MySQL database"] = "MySQL базе";
$definitions["MySQL host address"] = "MySQL хост адреса";
$definitions["MySQL password"] = "MySQL лозинка";
$definitions["MySQL queries"] = "MySQL упита";
$definitions["MySQL table prefix"] = "MySQL префикс табле";
$definitions["MySQL username"] = "MySQL надимак";
$definitions["MySQL version"] = "MySQL верзија";

$definitions["Name"] = "Име";
$definitions["never"] = "никада";
$definitions["%s new"] = "%s ново";
$definitions["New conversation"] = "Нова конверзација";
$definitions["New Conversation"] = "Нова Конверзација";
$definitions["New conversations in the past week"] = "Нове конверзације последње седмице";
$definitions["New email"] = "Нови е-маил";
$definitions["New members in the past week"] = "Нови чланови последње седмице";
$definitions["New password"] = "Нова лозинка";
$definitions["New posts in the past week"] = "Нови коментари последње седмице";
$definitions["New username"] = "Нови надимак";
$definitions["Next Step"] = "Следећи корак";
$definitions["Next"] = "Следеће";
$definitions["No preview"] = "Нема прегледа";
$definitions["No"] = "Не";
$definitions["Notifications"] = "Обавештења";
$definitions["Now"] = "Сада";

$definitions["OK"] = "ОК";
$definitions["Online"] = "Присутно";
$definitions["online"] = "присутно";
$definitions["Open registration"] = "Отворена регистрација";
$definitions["optional"] = "опционо";
$definitions["Order By:"] = "Поређај по:";
$definitions["Original Post"] = "Први Коментар";

$definitions["Page Not Found"] = "Страница није пронађена";
$definitions["Password"] = "Лозинка";
$definitions["PHP version"] = "PHP верзија";
$definitions["Plugins"] = "Додаци";
$definitions["Post a Reply"] = "Одговори";
$definitions["Post count"] = "Број коментара";
$definitions["Posts"] = "Коментари";
$definitions["Preview"] = "Преглед";
$definitions["Previous"] = "Претходна";

$definitions["Quote"] = "Цитирај";
$definitions["quote"] = "цитирај";

$definitions["Read more"] = "Читај даље";
$definitions["Recent posts"] = "Недавни коментари";
$definitions["Recover Password"] = "Поврати лозинку";
$definitions["Registered members"] = "Регистровани Чланови";
$definitions["Registration"] = "Регистрација";
$definitions["Remove avatar"] = "Уклони аватар";
$definitions["Rename Member"] = "Преименуј Члана";
$definitions["Reply"] = "Одговори";
$definitions["Report a bug"] = "Пријави грешку";
$definitions["Require users to confirm their email address"] = "Чланови морају потврдити е-маил адресу";
$definitions["Restore"] = "Поврати";
$definitions["restore"] = "поврати";
$definitions["Reset"] = "Ресетуј";

$definitions["Save Changes"] = "Сачувај Измене";
$definitions["Save Draft"] = "Сачувај Нацрт";
$definitions["Search conversations..."] = "Претражи конверзације...";
$definitions["Search within this conversation..."] = "Претражи у овој конверзацији...";
$definitions["Search"] = "Претрага";
$definitions["See the private conversations I've had with %s"] = "Прикажи приватне конверзације %s";
$definitions["Set a New Password"] = "Постави нову лозинку";
$definitions["Settings"] = "Подешавања";
$definitions["Show an image in the header"] = "Прикажи слику на врху";
$definitions["Show matching posts"] = "Прикажи одговарајуће коментаре";
$definitions["Show the channel list by default"] = "Прикажи листу канала као подразумевано";
$definitions["Show the conversation list by default"] = "Прикажи листу конверзације као подразумевано";
$definitions["Show the forum title in the header"] = "Прикажи наслов форума на врху";
$definitions["Sign Up"] = "Регистрација";
$definitions["Skins"] = "Теме";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "Follow to receive notifications";
$definitions["Starred"] = "Пратим";
$definitions["Start"] = "Почетак";
$definitions["Start a conversation"] = "Почни конверзацију";
$definitions["Start a new conversation"] = "Почни нову конверзацију";
$definitions["Start a private conversation with %s"] = "Почни приватну конверзацију са %s";
$definitions["Start Conversation"] = "Почни конверзацију";
$definitions["Starting a conversation"] = "Почиње конверзацију";
$definitions["Statistics"] = "Статистика";
$definitions["statistic.conversation.plural"] = "%s конверзације";
$definitions["statistic.conversation"] = "%s конверзација";
$definitions["statistic.member.plural"] = "%s чланова";
$definitions["statistic.member"] = "%s члан";
$definitions["statistic.online.plural"] = "%s присутно";
$definitions["statistic.online"] = "%s присутан";
$definitions["statistic.post.plural"] = "%s коментара";
$definitions["statistic.post"] = "%s коментар";
$definitions["Sticky"] = "Окачено";
$definitions["Subscribe"] = "Претплати Се";
$definitions["Subscribed"] = "Претплаћен";
$definitions["Subscription"] = "Претплата";
$definitions["Suspend member"] = "Суспендуј Члана";
$definitions["Suspend members."] = "Суспендовани Чланови.";
$definitions["Suspend"] = "Суспендуј";

$definitions["To get started with your forum, you might like to:"] = "Да започнеш са форумом можда би желео да:";

$definitions["Unhide"] = "Прикажи";
$definitions["Uninstall"] = "Деинсталирај";
$definitions["Unlock"] = "Откључај";
$definitions["Unmute conversation"] = "Одмутирај конверзацију";
$definitions["Unstarred"] = "Не прати";
$definitions["Unsticky"] = "Откачи";
$definitions["Unsubscribe new users by default"] = "Откажи претплату новим члановима као подразумевано";
$definitions["Unsubscribe"] = "Откажи претплату";
$definitions["Unsubscribed"] = "Пртплата отказана";
$definitions["Unsuspend member"] = "Скини суспензију члану";
$definitions["Unsuspend"] = "Скини суспензију";
$definitions["Until someone replies"] = "Док неко не коментарише";
$definitions["Untitled conversation"] = "Без наслова конверзација";
$definitions["Upgrade esoTalk"] = "Надогради esoTalk";
$definitions["Use a background image"] = "Користи позадинску слику";
$definitions["Use for mobile"] = "Користи за мобилни";
$definitions["Use friendly URLs"] = "користи пријатељски URL";
$definitions["Used to verify your account and subscribe to conversations"] = "Used to verify your account and subscribe to conversations";
$definitions["Username"] = "Надимак";
$definitions["Username or Email"] = "Надимак или е-маил";

$definitions["View %s's profile"] = "Види %s профил";
$definitions["View all notifications"] = "Види сва обавештења";
$definitions["View more"] = "Види још";
$definitions["View your profile"] = "Види свој профил";
$definitions["View"] = "Преглед";
$definitions["Viewing: %s"] = "Гледа: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s коментаре";

$definitions["Warning"] = "Ух, нешто није у реду!";
$definitions["Welcome to esoTalk!"] = "Добродошли на esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "Пријављен си успешно. Добродошао у админ панел.";
$definitions["Write a reply..."] = "Коментариши...";

$definitions["Yes"] = "Да";
$definitions["You can manage channel-specific permissions on the channels page."] = "Можеш да уређујеш  дозволе канала на страници за канале.";
$definitions["Your current password"] = "Твоја тренутна лозинка";


// Messages.
$definitions["message.404"] = "Хух- страница није пронађена!";
$definitions["message.ajaxDisconnected"] = "Не могу да комуницирам са сервером. Сачекајте пар секунди и <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>покушајте поново</a>, или <a href='' onclick='window.location.reload();return false'>освежите страницу</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.changesSaved"] = "Your changes were saved.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "Тренутно нема присутних.";
$definitions["message.noNotifications"] = "Немате обавештења.";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "Нема инсталираних додатака тренутно.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "Нема инсталираних тема тренутно.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Да ли си заборавио лозинку, %1\$s?";
$definitions["email.header"] = "<p>Хеј %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "Чека вас одговор у '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "аутор:";
$definitions["gambit.contributor:"] = "сарадник:";
$definitions["gambit.member"] = "члан";
$definitions["gambit.myself"] = "ја";
$definitions["gambit.draft"] = "нацрт";
$definitions["gambit.locked"] = "закључано";
$definitions["gambit.order by newest"] = "поређај по најновијем";
$definitions["gambit.order by replies"] = "поређај по одговорима";
$definitions["gambit.private"] = "приватно";
$definitions["gambit.random"] = "насумично";
$definitions["gambit.reverse"] = "обрнуто";
$definitions["gambit.starred"] = "праћено";
$definitions["gambit.muted"] = "утишано";
$definitions["gambit.sticky"] = "закачено";
$definitions["gambit.unread"] = "непрочитано";
$definitions["gambit.limit:"] = "лимит:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "активно данас"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "активни 1 дан"; // what it actually evaluates to

$definitions["gambit.has replies"] = "има одговора";
$definitions["gambit.has >0 replies"] = "има >0 одговора";
$definitions["gambit.has >10 replies"] = "има >10 одговора";

$definitions["gambit.has no replies"] = "нема одговора";
$definitions["gambit.has 0 replies"] = "има 0 одговора";

$definitions["gambit.dead"] = "угашено";
$definitions["gambit.active >30 day"] = "активно >30 дана";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "секунда";
$definitions["gambit.minute"] = "минут";
$definitions["gambit.hour"] = "сат";
$definitions["gambit.day"] = "дан";
$definitions["gambit.week"] = "седмица";
$definitions["gambit.month"] = "месец";
$definitions["gambit.year"] = "година";
$definitions["gambit.last"] = "последње"; // as in "active last 180 days"
$definitions["gambit.active"] = "активно"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}и";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}а";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^има *(?<a>>|<|>=|<=)? *(?<b>\d+) *одг/";
