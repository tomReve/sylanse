��    ^           �      �     �  A  	  I  K	  �   �
  �    �  �  �  �  N    �   j       #   !     E     Y     h     u  O   �     �  T   �     ?     ^     g     �     �     �  #   �     �  R         S     a     p  %   ~     �     �     �     �     �     �     �               *  �   6     �  	   �     �  K   �     A     N  �   \  �   �  $   �  -   �     !  4   1  0   f  j   �       `             �     �     �  A   �  (          ?      `   7   |   2   �      �      �   +   !  &   1!      X!     y!     �!  
   �!     �!  [   �!  6   "     B"  U   Y"     �"     �"  A   �"     #     !#  E   ;#  5   �#  Q   �#     	$  �   &$     �$  3   �$  A   %     B&  f  T&  y  �'  �   5)  �  �)  4  �-     �0  t  �5  �   W7     8  ?   -8     m8     �8     �8     �8  r   �8     E9  ]   _9  6   �9     �9     :  1    :  $   R:  *   w:  1   �:     �:  e   �:     L;     Z;     l;  -   z;  "   �;     �;     �;     �;     <     	<     <  "   9<     \<     p<  �   |<     W=  	   `=     j=  [   s=     �=     �=  �   �=    �>  :   �?  L   �?     1@  Q   D@  C   �@  v   �@  '   QA  o   yA     �A     	B     B  (   )B  R   RB  -   �B  %   �B  7   �B  [   1C  M   �C     �C     �C  6   D  2   FD  2   yD  	   �D     �D     �D     �D  m   �D  G   hE  *   �E  K   �E     'F     /F  R   =F     �F  *   �F  Q   �F  N   ,G  s   {G  ,   �G  �   H     �H  3   �H         U   4   H   >   Q   *       W          1   ?   
   7   3          D                               ]          ;       2       =      P   S      6   L       $              .   V   -   ,              "      J         0   F   :       ^          N   R   	   )          #       Z                       X   I   A           \   /         !   <   5         T               O           K   &   Y   M          C   +   '       9       E   8      @   %          B      [       (   G     - recommended! <h3><img src="%s" width="16" height="16" /> %s - version %s</h3><p>By default, out-of-the-box all mailto links in your posts, pages, comments and (text) widgets will be encoded and protected. <br/>If you also want to encode plain email address, you have to enable that option.</p><img src="%s" width="600" height="273" /> <h3>Action Hooks</h3><h4>eeb_ready</h4><p>Add extra code on initializing this plugin, like extra filters for encoding.</p><pre><code><&#63;php
add_action('eeb_ready', 'extra_encode_filters');

function extra_encode_filters($eeb_object) {
    add_filter('some_filter', array($eeb_object, 'callback_filter'));
}
&#63;></code></pre> <h3>FAQ</h3><p>Please see the <a href="http://wordpress.org/extend/plugins/email-encoder-bundle/faq/" target="_blank">official FAQ</a>. <h3>Filter Hooks</h3><h4>eeb_mailto_regexp</h4><p>You can change the regular expression used to search for mailto links.</p><pre><code><&#63;php
add_filter('eeb_mailto_regexp', 'change_mailto_regexp');

function change_mailto_regexp($regexp) {
    return '-your regular expression-';
}
&#63;></code></pre><h4>eeb_email_regexp</h4><p>You can change the regular expression used to search for mailto links.</p><pre><code><&#63;php
add_filter('eeb_email_regexp', 'change_email_regexp');

function change_email_regexp($regexp) {
    return '-your regular expression-';
}
&#63;></code></pre><h4>eeb_form_content</h4><p>Filter for changing the form layout.</p><pre><code><&#63;php
add_filter('eeb_form_content', 'eeb_form_content', 10, 4);

function eeb_form_content($content, $labels, $show_powered_by, $methods) {
    // add a &lt;div&gt;-wrapper
    return '&lt;div class="form-wrapper"&gt;' . $content . '&lt;/div&gt;';
}
&#63;></code></pre> <h3>Shortcodes</h3><p>You can use these shortcodes within your posts or pages.</p><h4>eeb_email</h4><p>Create an encoded mailto link:</p><p><code>[eeb_email email="..." display="..."]</code></p><ul><li>"display" is optional or the email wil be shown as display (also protected)</li><li>"extra_attrs" is optional, example: <code>extra_attrs="target='_blank'"</code></li><li>"method" is optional, else the method option will be used.</li></ul><h4>eeb_content</h4><p>Encode some text:</p><p><code>[eeb_content method="..."]...[/eeb_content]</code></p><ul><li>"method" is optional, else the method option will be used.</li></ul><h4>eeb_form</h4><p>Create an encoder form:</p><p><code>[eeb_form]</code></p> <h3>Template Functions</h3><h4>eeb_email()</h4><p>Create an encoded mailto link:</p><pre><code><&#63;php
if (function_exists('eeb_email')) {
    echo eeb_email('info@somedomain.com');
}
&#63;></code></pre><p>You can pass a few extra optional params (in this order): <code>display</code>, <code>extra_attrs</code>, <code>method</code></p><h4>eeb_content()</h4><p>Encode some text:</p><pre><code><&#63;php
if (function_exists('eeb_content')) {
    echo eeb_content('Encode this text');
}
&#63;></code></pre><p>You can pas an extra optional param: <code>method</code></p><h4>eeb_email_filter()</h4><p>Filter given content and encode all email addresses or mailto links:</p><pre><code><&#63;php
if (function_exists('eeb_email_filter')) {
    echo eeb_email_filter('Some content with email like info@somedomein.com or a mailto link');
}
&#63;></code></pre><p>You can pass a few extra optional params (in this order): <code>enc_tags</code>, <code>enc_mailtos</code>, <code>enc_plain_emails</code>, <code>enc_input_fields</code></p><h4>eeb_form()</h4><p>Create an encoder form:</p><pre><code><&#63;php
if (function_exists('eeb_form')) {
    echo eeb_form();
}
&#63;></code></pre> <h4>More Info</h4><ul><li><a href="https://profiles.wordpress.org/ironikus/#content-plugins" target="_blank">Quality free plugins</a></li><li><a href="http://wordpress.org/support/plugin/email-encoder-bundle#postform" target="_blank">Get Support</a></li><li><a href="https://ironikus.com/" target="_blank">Visit Ironikus</a></li></ul> <p>Warning - The plugin <strong>%s</strong> requires PHP 5.2.4+ and WP 3.6+.  Please upgrade your PHP and/or WordPress.<br/>Disable the plugin to remove this message.</p> Action Hook Add class to protected mailto links Additional Settings Admin Settings All comments All posts and pages All protected mailto links will get these class(es). Optional, else keep blank. All text widgets All widgets (uses the <code>widget_content</code> filter of the Widget Logic plugin) Also use shortcodes in widgets Apply on Check "succesfully encoded" Choose admin menu position Choose protection method Choose what to protect Create Protected Mail Link &gt;&gt; Display Text: Do <strong>not</strong> apply protection on posts or pages with the folllowing ID: Documentation Email Address: Email Encoder Email Encoder - Protect Email Address Email Encoder Form Encoded Encoding Method: Exclude posts FAQ Filter Hooks For encoded emails: For other encoded content: Get support Html Encode If you like you can also create you own secure mailto links manually with this form. Just copy/paste the generated code and put it in your post, page or template. Ironikus JS Escape JS Rot13 Keep supporting the old names for action, shortcodes and template functions Mailto Link: Main Settings Not recommended, equal to <a href="http://codex.wordpress.org/Function_Reference/antispambot" target="_blank"><code>antispambot()</code></a> function of WordPress Notice: be careful with this option when using email addresses on form fields, please <a href="http://wordpress.org/extend/plugins/email-encoder-bundle/faq/" target="_blank">check the FAQ</a> for more info. Notice: only works for text widgets! Notice: shortcodes still work on these posts. Powered by free Pretty safe method using JavaScipt's escape function Protect Email Addresses From Bots &amp; Scrapers Protect email addresses on your site and hide them from spambots by encoding them. Easy to use & flexible. Protect emails in RSS feeds Protect mailto links, like f.e. <code>&lt;a href="info@myemail.com"&gt;My Email&lt;/a&gt;</code> Protected Mail Link (code): Quick Start RSS Settings Rate the plugin ★★★★★ Recommended, the safest method using a rot13 method in JavaScript Remove all shortcodes from the RSS feeds Remove shortcodes from RSS feeds Replace emails in RSS feeds Replace plain email addresses to protected mailto links Replace pre-filled email addresses in input fields Report a problem Save Changes Seperate Id's by comma, f.e.: 2, 7, 13, 32. Set <code>&lt;noscript&gt;</code> text Set protection text in RSS feeds Settings Settings saved. Shortcodes Show "powered by" Show "successfully encoded" text for all encoded content, only when logged in as admin user Show a "powered by" link on bottom of the encoder form Show as main menu item Successfully Encoded! This is a check and it\'s only visible when logged in as admin. Support Template Functions This way you can check if emails are really encoded on your site. Use deprecated names Use shortcodes in widgets Used as <code>&lt;noscript&gt;</code> fallback for JavaScrip methods. Used as replacement for email addresses in RSS feeds. Warning: "WP Mailto Links"-plugin is also activated, which could cause conflicts. You Might Need These Plugins You can also put the encoder form on your site by using the shortcode <code>[eeb_form]</code> or the template function <code>eeb_form()</code>. https://ironikus.com/ https://wordpress.org/plugins/email-encoder-bundle/ PO-Revision-Date: 2019-08-01 09:50:50+0000
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=2; plural=n > 1;
X-Generator: GlotPress/2.4.0-alpha
Language: fr
Project-Id-Version: Plugins - Email Encoder &#8211; Protect Email Address - Stable (latest release)
  - recommandé ! <h3><img src="%s" width="16" height="16" /> %s - version %s</h3><p>Par défaut, tous les liens <code>mailto</code> ide vos articles, pages, commentaires et widgets de texte seront encodés et protégés. <br/>Si vous souhaitez également encoder les adresses e-mails en texte brut, vous pouvez activer l’option.</p><img src="%s" width="600" height="273" /> <h3>Crochets d’actions</h3><h4>eeb_ready</h4><p>Ajoutez du code supplémentaire à l’activation de l’extension comme des filtres additionnels pour l’encodage.</p><pre><code><&#63;php
add_action('eeb_ready', 'extra_encode_filters');

function extra_encode_filters($eeb_object) {
    add_filter('some_filter', array($eeb_object, 'callback_filter'));
}
&#63;></code></pre> <h3>FAQ</h3><p>Veuillez consulter la <a href="http://wordpress.org/extend/plugins/email-encoder-bundle/faq/" target="_blank">FAQ officielle</a>. <h3>Crochets de filtres</h3><h4>eeb_mailto_regexp</h4><p>Vous pouvez modifier l’expression régulière utilisée pour chercher les liens mailto.</p><pre><code><&#63;php
add_filter('eeb_mailto_regexp', 'change_mailto_regexp');

function change_mailto_regexp($regexp) {
    return '-your regular expression-';
}
&#63;></code></pre><h4>eeb_email_regexp</h4><p>Vous pouvez modifier l’expression régulière utilisée pour chercher les liens mailto.</p><pre><code><&#63;php
add_filter('eeb_email_regexp', 'change_email_regexp');

function change_email_regexp($regexp) {
    return '-your regular expression-';
}
&#63;></code></pre><h4>eeb_form_content</h4><p>Filtre pour changer la mise en page du formulaire.</p><pre><code><&#63;php
add_filter('eeb_form_content', 'eeb_form_content', 10, 4);

function eeb_form_content($content, $labels, $show_powered_by, $methods) {
    // add a &lt;div&gt;-wrapper
    return '&lt;div class="form-wrapper"&gt;' . $content . '&lt;/div&gt;';
}
&#63;></code></pre> <h3>Codes courts</h3><p>Vous pouvez utiliser ces codes courts dans vos publications.</p><h4>eeb_email</h4><p>Créez un lien mailto encodé :</p><p><code>[eeb_email email="..." display="..."]</code></p><ul><li>« display » est optionnel ou l’e-mail sera affiché tel que défini dans display (protégé également)</li><li>« extra_attrs » est optionnel, par ex. : <code>extra_attrs="target='_blank'"</code></li><li>« method » est optionnel, l’option définie dans les réglages sera utilisée.</li></ul><h4>eeb_content</h4><p>Encodez du texte :</p><p><code>[eeb_content method="..."]...[/eeb_content]</code></p><ul><li>« method » est optionnel, l’option définie dans les réglages sera utilisée.</li></ul><h4>eeb_form</h4><p>Créez un formulaire d’encodage :</p><p><code>[eeb_form]</code></p> <h3>Fonctions PHP</h3><h4>eeb_email()</h4><p>Créez des liens mailto encodés :</p><pre><code><&#63;php
if (function_exists('eeb_email')) {
    echo eeb_email('info@somedomain.com');
}
&#63;></code></pre><p>Vous pouvez transmettre des paramètres additionnels optionnels (dans cette ordre) : <code>display</code>, <code>extra_attrs</code>, <code>method</code></p><h4>eeb_content()</h4><p>Encodez du texte :</p><pre><code><&#63;php
if (function_exists('eeb_content')) {
    echo eeb_content('Encoder ce texte');
}
&#63;></code></pre><p>Vous pouvez transmettre un paramètre additionnel : <code>method</code></p><h4>eeb_email_filter()</h4><p>Filtrez un contenu donné et encodez toutes les adresses e-mails ou liens mailto :</p><pre><code><&#63;php
if (function_exists('eeb_email_filter')) {
    echo eeb_email_filter('Du contenu avec des e-mails comme info@somedomein.com ou un lien mailto');
}
&#63;></code></pre><p>Vous pouvez transmettre des paramètres additionnels optionnels (dans cette ordre) : <code>enc_tags</code>, <code>enc_mailtos</code>, <code>enc_plain_emails</code>, <code>enc_input_fields</code></p><h4>eeb_form()</h4><p>Créez un formulaire d’encodage :</p><pre><code><&#63;php
if (function_exists('eeb_form')) {
    echo eeb_form();
}
&#63;></code></pre> <h4>More Info</h4><ul><li><a href="https://profiles.wordpress.org/ironikus/#content-plugins" target="_blank">Extensions gratuites de qualité</a></li><li><a href="http://wordpress.org/support/plugin/email-encoder-bundle#postform" target="_blank">Obtenez de l’aide</a></li><li><a href="https://ironikus.com/" target="_blank">Visiter le site web d’Ironikus</a></li></ul> <p>Avertissement - L’extension <strong>%s</strong> nécessite PHP 5.2.4+ et WP 3.6+. Veuillez mettre à niveau PHP et/ou WordPress..<br/>Désactivez l’extension pour retirer ce message.</p> Crochets d’action Ajouter une classe pour protéger les liens <code>mailto</code> Réglages additionnels Réglages d’administration Tous les commentaires Tous les articles et pages Tous les liens <code>mailto</code> protégés recevront ces classes. Optionnel, vous pouvez laisser ce champ vide. Tous les widgets de texte Tous les widgets (utilise le filtre<code>widget_content</code> de l’extension Widget Logic) Utiliser également les codes courts dans les widgets. Appliquer sur Marquer les contenus encodés Choisissez la position du menu d’administration Choisissez la méthode de protection Choisissez ce que vous souhaitez protéger Créer un lien protégé pour l’e-mail &gt;&gt; Texte affiché : Ne <strong>pas</strong> appliquer de protection sur les articles ou les pages avec l’ID suivante : Documentation Adresse e-mail : Email Encoder Email Encoder - Protégez vos adresses e-mail Formulaire d’encodage d’e-mail Encodé Méthode d’encodage : Exclure les publications FAQ Crochets de filtre Pour les e-mails encodés : Pour tout autre contenu encodé : Obtenir de l’aide Html Encode Si vous le souhaitez, vous pouvez également créer votre propre lien sécurisé <code>mailto</code> à l’aide de ce formulaire. Il suffit de copier le code généré et le mettre dans votre article, page ou modèle. Ironikus JS Escape JS Rot13 Continuer de prendre en charge les anciens noms des actions, codes courts et fonctions PHP. Lien mailto : Réglages principaux Non recommandé, équivalent à la fonction <a href="http://codex.wordpress.org/Function_Reference/antispambot" target="_blank"><code>antispambot()</code></a> de WordPress. Remarque : soyez prudent avec cette option lors de l’utilisation d’adresses e-mail dans des champs de formulaire, veuillez <a href="http://wordpress.org/extend/plugins/email-encoder-bundle/faq/" target="_blank">consulter la FAQ</a> pour plus d’informations. Remarque : ne fonctionne que pour les widgets de texte ! Remarque : les codes courts continuent de fonctionner sur ces publications. Propulsé par free Une bonne méthode sécurisée utilisant la fonction d’échappement JavaScript. Protégez les adresses e-mail des robots et des aspirateurs de site Protégez les adresses e-mail sur votre site et cachez-les des robots en les encodant. Simple et pratique à utiliser. Protéger les e-mails dans les flux RSS Protéger les liens mailto, comme par ex. : <code>&lt;a href="info@myemail.com"&gt;Mon e-mail&lt;/a&gt;</code> Lien e-mail protégé (code) : Démarrage rapide Réglages RSS Évaluez cette extension ★★★★★ Recommandé, la méthode la plus sûre utilisant une méthode rot13 en JavaScript. Supprimer tous les codes courts des flux RSS. Retirer les codes courts des flux RSS Remplacer les adresses de messagerie dans les flux RSS. Remplacer les adresses de messagerie en texte par des liens <code>mailto</code> protégés. Remplacer les adresses de messagerie pré-remplies dans les champs de saisie. Signaler un problème Enregistrer les modifications ID séparés par une virgule, par ex. : 2, 7, 13, 32. Définissez le texte <code>&lt;noscript&gt;</code> Appliquer un texte de protection dans les flux RSS Réglages Réglages enregistrés. Codes courts Afficher « propulsé par » Affiche le texte « bien encodé » pour tous les contenus encodés, uniquement visible des administrateurs Afficher le lien « propulsé par » en bas du formulaire d’encodage Afficher comme élément de menu principal Bien encodé ! Cette vérification n’est visible que des adminstrateurs. Support Fonctions PHP Ainsi, vous pouvez vérifier si les e-mails sont vraiment encodés sur votre site. Utiliser les noms dépréciés Utiliser les codes courts dans les widgets Utilisé comme repli <code>&lt;noscript&gt;</code> pour les méthodes JavaScript. Utilisé comme remplacement pour les adresses de messagerie dans les flux RSS. Attention : l’extension « WP Mailto Links » est également activée, ce qui pourrait provoquer des conflits. Vous pourriez avoir besoin de ces extensions Vous pouvez aussi afficher le formulaire d’encodage sur votre site en utilisant le code court <code>[eeb_form]</code> ou la fonction de modèle <code>eeb_form()</code>. https://ironikus.com/ https://wordpress.org/plugins/email-encoder-bundle/ 