<?php

/* __string_template__39a26e0c23ec3b0656194c1413e4e448fb47e9dbffe72ff1b798055e976ef8e2 */
class __TwigTemplate_f833fc5d7a2158b6839f2fb576893b9e4921bed8daed8df52497c6da009991fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/stage/webshop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/stage/webshop/img/app_icon.png\" />

<title>Geïnstalleerde modules beheren • AlexShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'nl';
    var full_language_code = 'nl-nl';
    var full_cldr_language_code = 'nl-NL';
    var country_iso_code = 'NL';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Een nieuwe bestelling is geplaatst in uw winkel';
    var order_number_msg = 'Ordernummer: ';
    var total_msg = 'Totaal ';
    var from_msg = 'Van: ';
    var see_order_msg = 'Bekijk deze bestelling';
    var new_customer_msg = 'Een nieuwe klant heeft zich geregistreerd in uw winkel';
    var customer_name_msg = 'Klantnaam: ';
    var new_msg = 'Er is een nieuw bericht geplaatst in uw winkel.';
    var see_msg = 'Lees het bericht';
    var token = '2b13cc12e3c03b2c05a527c83d3ccfe1';
    var token_admin_orders = 'f5ad67e7128ae6e7dc2c0f84edd1a8e8';
    var token_admin_customers = '19ed45840e800f74703c8f37a7e643a6';
    var token_admin_customer_threads = '1485dd309f779311acfa5ca06cf19ec3';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '95edcc72018554498cb7a395584bde95';
    var choose_language_translate = 'Kies taal';
    var default_language = '1';
    var admin_modules_link = '/stage/webshop/admin378e5kpgu/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA';
    var tab_modules_list = '';
    var update_success_msg = 'Bijwerken geslaagd';
    var errorLogin = 'Prestashop is er niet in geslaagd om u aan te melden bij Addons, check uw gegevens en uw internet connectie.';
    var search_product_msg = 'Zoek een product';
  </script>

      <link href=\"/stage/webshop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/stage/webshop/admin378e5kpgu/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/stage/webshop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/stage/webshop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/stage/webshop/admin378e5kpgu/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/stage\\/webshop\\/admin378e5kpgu\\/\";
var baseDir = \"\\/stage\\/webshop\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":\"\\u00a4\\u00a0#,##0.00;\\u00a4\\u00a0#,##0.00-\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/admin378e5kpgu/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/admin378e5kpgu/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/stage/webshop/admin378e5kpgu/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminGamification&token=70336c9ce948adc7d0b93281ea5f1a78';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminDashboard&amp;token=5859ff560826469d721821a04eab02a7\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Snelle toegang</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminOrders&amp;token=f5ad67e7128ae6e7dc2c0f84edd1a8e8\"
                 data-item=\"Bestellingen\"
      >Bestellingen</a>
          <a class=\"dropdown-item active\"
         href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php/module/manage?token=1eb61f243ff1ee43e3423965d0c892eb\"
                 data-item=\"Geïnstalleerde modules\"
      >Geïnstalleerde modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php/product/new?token=1eb61f243ff1ee43e3423965d0c892eb\"
                 data-item=\"Nieuw product\"
      >Nieuw product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCategories&amp;addcategory&amp;token=4c44983a7d958532ad8daf6413a71912\"
                 data-item=\"Nieuwe categorie\"
      >Nieuwe categorie</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=eb7017b0f6acb261b154211189d9da09\"
                 data-item=\"Nieuwe voucher\"
      >Nieuwe voucher</a>
        <hr>
          <a
         class=\"dropdown-item js-quick-link\"
         data-method=\"remove\"
         data-quicklink-id=\"5\"
         data-rand=\"44\"
         data-icon=\"icon-AdminParentModulesSf\"
         data-url=\"index.php/module/manage\"
         data-post-link=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminQuickAccesses&token=bba540758c50879c8414e11555db91c3\"
         data-prompt-text=\"Geef een naam aan deze shortcut:\"
         data-link=\" - Lijst\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Verwijder van Snelkeuze
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminQuickAccesses&token=bba540758c50879c8414e11555db91c3\">
      <i class=\"material-icons\">settings</i>
      Snelkoppelingen beheren
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/stage/webshop/admin378e5kpgu/index.php?controller=AdminSearch&amp;token=da073e234222aff59122a0d9085b2cfd\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Zoeken (bijv. productreferentie, klantnaam...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Overal
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Overal\" href=\"#\" data-value=\"0\" data-placeholder=\"Wat zoekt u?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Overal</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogus\" href=\"#\" data-value=\"1\" data-placeholder=\"Productnaam, SKU, referentie...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogus
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Klanten op naam\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, naam...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Klanten op naam
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Klanten op IP adres\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Klanten op IP adres</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Bestellingen\" href=\"#\" data-value=\"3\" data-placeholder=\"Bestelling-ID\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Bestellingen
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Facturen\" href=\"#\" data-value=\"4\" data-placeholder=\"Factuurnummer\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Facturen
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Winkelwagens\" href=\"#\" data-value=\"5\" data-placeholder=\"Winkelwagen-ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Winkelwagens
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Modulenaam\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">Zoeken<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/lemonture%40gmail.com.jpg\" /><br>
      <span>Alex Haverkamp</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminEmployees&amp;token=95edcc72018554498cb7a395584bde95&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Uw profiel
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminLogin&amp;token=fccdb71e4b60b00234797230efa55449&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Afmelden
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Bestellingen<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klanten<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Berichten<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Geen nieuwe bestellingen :(<br>
              Heeft u uw succes conversie recentelijk al bekeken?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Geen nieuwe klanten :(<br>
              Heeft u al overwogen om te verkopen op marktplaatsen?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Geen nieuwe berichten.<br>
              Het lijkt erop dat al uw klanten tevreden zijn :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      van <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - geregistreerd <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/stage/webshop/\" target= \"_blank\">AlexShop</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminDashboard&amp;token=5859ff560826469d721821a04eab02a7\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"2\">
              <span class=\"title\">Verkopen</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminOrders&amp;token=f5ad67e7128ae6e7dc2c0f84edd1a8e8\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Bestellingen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminOrders&amp;token=f5ad67e7128ae6e7dc2c0f84edd1a8e8\" class=\"link\"> Bestellingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminInvoices&amp;token=8484dd14df3f78ed3399cbaa58611793\" class=\"link\"> Facturen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminSlip&amp;token=ab697d66afbe3bf203b50eccef735129\" class=\"link\"> Creditnota&#039;s
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminDeliverySlip&amp;token=f011bc043048f1180933d08789bbb515\" class=\"link\"> Pakbonnen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCarts&amp;token=6f7d6ff237e54e968631663d64148e7b\" class=\"link\"> Winkelwagens
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/stage/webshop/admin378e5kpgu/index.php/product/catalog?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogus
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/stage/webshop/admin378e5kpgu/index.php/product/catalog?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\" class=\"link\"> Producten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCategories&amp;token=4c44983a7d958532ad8daf6413a71912\" class=\"link\"> Categorieën
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminTracking&amp;token=672ef93a63189a3ba8955b61633cd4cd\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminAttributesGroups&amp;token=8baaa815c70cfcb7e0426a6865d46e55\" class=\"link\"> Kenmerken en functies
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminManufacturers&amp;token=66985e90f630eaefd683d5118561a3dd\" class=\"link\"> Merken en leveranciers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminAttachments&amp;token=f425b0bb25ce3c739a8f1a925586f26d\" class=\"link\"> Bestanden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCartRules&amp;token=eb7017b0f6acb261b154211189d9da09\" class=\"link\"> Kortingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/stage/webshop/admin378e5kpgu/index.php/stock/?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCustomers&amp;token=19ed45840e800f74703c8f37a7e643a6\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Klanten
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCustomers&amp;token=19ed45840e800f74703c8f37a7e643a6\" class=\"link\"> Klanten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminAddresses&amp;token=0a0f368fb2b013ec8f136645c3226b0b\" class=\"link\"> Adressen
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCustomerThreads&amp;token=1485dd309f779311acfa5ca06cf19ec3\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Klantenservice
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCustomerThreads&amp;token=1485dd309f779311acfa5ca06cf19ec3\" class=\"link\"> Klantenservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminOrderMessage&amp;token=d068380268fbb0b2405f1107e6c32cda\" class=\"link\"> Bestellingsberichten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminReturn&amp;token=25bdc078b83a27f14e1d7ce848aa4a21\" class=\"link\"> Retourzendingen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminStats&amp;token=aed3a8f563cba94694b78d09272eacd2\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistieken
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"42\">
              <span class=\"title\">Verbeteren</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\">
                  <a href=\"/stage/webshop/admin378e5kpgu/index.php/module/catalog?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/stage/webshop/admin378e5kpgu/index.php/module/catalog?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\" class=\"link\"> Modules en services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminAddonsCatalog&amp;token=95e2664cc758b078ea491fc6869b90e0\" class=\"link\"> Modulecatalogus
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminThemes&amp;token=a9b56cb27abe91f7b07d35897e2cb04c\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Design
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminThemes&amp;token=a9b56cb27abe91f7b07d35897e2cb04c\" class=\"link\"> Thema en logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminThemesCatalog&amp;token=b5a9893406857b48717eeb7a8d6d415c\" class=\"link\"> Themacatalogus
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCmsContent&amp;token=7f2ded017eb039d37017234d024c9006\" class=\"link\"> Pagina&#039;s
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminModulesPositions&amp;token=fdf9b8ede550777da55ca6c641c1735e\" class=\"link\"> Posities
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminImages&amp;token=623bd3654641abfa730739073845e291\" class=\"link\"> Afbeeldingsinstellingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminLinkWidget&amp;token=9f8dc157cfe1ea1a6050ec8b7af24247\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCarriers&amp;token=ac5ed9789fbaa27439686fa05eb2a91a\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Verzending
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCarriers&amp;token=ac5ed9789fbaa27439686fa05eb2a91a\" class=\"link\"> Vervoerders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminShipping&amp;token=9af6d2aa8243437066ada380f6b878db\" class=\"link\"> Instellingen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPayment&amp;token=4741d40e0a2329606a054be3aa289e92\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Betaling
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPayment&amp;token=4741d40e0a2329606a054be3aa289e92\" class=\"link\"> Betaalmethoden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPaymentPreferences&amp;token=d5762a7c91f532cf34a97fb6397d0b02\" class=\"link\"> Instellingen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminLocalization&amp;token=ac56a71b6df332f30d10e84dcfdeeff6\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internationaal
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminLocalization&amp;token=ac56a71b6df332f30d10e84dcfdeeff6\" class=\"link\"> Lokalisatie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCountries&amp;token=c5daaf545d1554d90b2c33b2ea82b26d\" class=\"link\"> Locaties
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminTaxes&amp;token=5219ff5db34651f283cba77a3f453340\" class=\"link\"> Belastingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminTranslations&amp;token=0cef09fd35b1ce1f9f026e2d29253b80\" class=\"link\"> Vertalingen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configureer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPreferences&amp;token=b554b04c5fcbb61487d007d2b25c8c80\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Winkelinstellingen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPreferences&amp;token=b554b04c5fcbb61487d007d2b25c8c80\" class=\"link\"> Algemeen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminOrderPreferences&amp;token=e8fe991470ec019f675ddd80e1679a76\" class=\"link\"> Bestellingsinstellingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPPreferences&amp;token=da835eaf39827c3f7bc9cdc40c40ce42\" class=\"link\"> Producten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminCustomerPreferences&amp;token=8f379539d97dc262e5a6354962f4e267\" class=\"link\"> Klantinstellingen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminContacts&amp;token=06ee0861f8232a5f04c5187ec629ad0a\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminMeta&amp;token=beae854babb91d8098438d94b70abbb1\" class=\"link\"> Verkeer en SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminSearchConf&amp;token=bd4d454d482e9bd7d17d0c6660e82e28\" class=\"link\"> Zoeken
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminGamification&amp;token=70336c9ce948adc7d0b93281ea5f1a78\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminInformation&amp;token=656639ea7e3f9e3002b19c56c1701585\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Geavanceerde instellingen
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminInformation&amp;token=656639ea7e3f9e3002b19c56c1701585\" class=\"link\"> Informatie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminPerformance&amp;token=dfe47bdec66c48d53693688b352f388c\" class=\"link\"> Prestaties
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminAdminPreferences&amp;token=5734e166470c081a044bf73346f66afd\" class=\"link\"> Administratie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminEmails&amp;token=eed5f40c50a3726226a7e368e3b44d7b\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminImport&amp;token=cc4fca36f1e9781043f4dc13a927a2f1\" class=\"link\"> Importeren
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminEmployees&amp;token=95edcc72018554498cb7a395584bde95\" class=\"link\"> Medewerkers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminRequestSql&amp;token=88aa61e180d6221bd4e6f251202ce2c8\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminLogs&amp;token=916c62701ef51c1352ecfdee4c82547f\" class=\"link\"> Logboeken
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminWebservice&amp;token=592d7a15750e01e5ab40964f656f39fb\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminParentModulesSf&amp;token=9d733939756156bee4097e9113bf2393\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Geïnstalleerde modules beheren    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Upload een module\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Upload een module</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Maak verbinding met Addons\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Maak verbinding met Addons</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Help\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/stage/webshop/admin378e5kpgu/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fnl%252Fdoc%252FAdminModules%253Fversion%253D1.7.2.4%2526country%253Dnl/Help?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Help</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\"
   href=\"/stage/webshop/admin378e5kpgu/index.php/module/catalog?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\">Selectie</a>

                <a class=\"tab current\"
   href=\"/stage/webshop/admin378e5kpgu/index.php/module/manage?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\">Geïnstalleerde modules</a>

                <a class=\"tab\"
   href=\"/stage/webshop/admin378e5kpgu/index.php/module/notifications?_token=nWxMgpoIrN30ITdqk5yDFaItWyFcbsA6LzHKjQz36YA\">Meldingen  <div class=\"notification-container\">
    <span class=\"notification-counter\">2</span>
  </div>
  </a>

            </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-NL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/nl/login?email=lemonture%40gmail.com&amp;firstname=Alex&amp;lastname=Haverkamp&amp;website=http%3A%2F%2Flocalhost%2Fstage%2Fwebshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-NL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/stage/webshop/admin378e5kpgu/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Verbind uw winkel met PrestaShop-marktplaats om al uw Addons-aankopen automatisch te importeren.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>U heeft nog geen account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Ontdek de kracht van PrestaShop Addons! Ontdek de officiële PrestaShop Addons marktplaats en vind meer dan 3.500 innovatieve modules en thema's die de conversie optimaliseren, meer verkeer genereren, die bouwen aan klantloyaliteit en uw productiviteit maximaliseren</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Verbinden met PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/nl/forgot-your-password\">Ik ben mijn wachtwoord vergeten</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/nl/login?email=lemonture%40gmail.com&amp;firstname=Alex&amp;lastname=Haverkamp&amp;website=http%3A%2F%2Flocalhost%2Fstage%2Fwebshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-NL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tAccount aanmaken
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Inloggen
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1147
        $this->displayBlock('content_header', $context, $blocks);
        // line 1148
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1149
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1150
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1151
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh nee!</h1>
  <p class=\"m-t-3\">
    De mobiele versie van deze pagina is nog niet beschikbaar.
  </p>
  <p class=\"m-t-2\">
    Gebruik een desktop om deze pagina te openen tot deze voor mobiel is aangepast.
  </p>
  <p class=\"m-t-2\">
    Dank u.
  </p>
  <a href=\"http://localhost/stage/webshop/admin378e5kpgu/index.php?controller=AdminDashboard&amp;token=5859ff560826469d721821a04eab02a7\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Terug
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Laadtijd: \"></i> 2.063s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-NL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-NL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-NL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-NL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Add-ons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-NL&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Training
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-NL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/nl/login?email=lemonture%40gmail.com&amp;firstname=Alex&amp;lastname=Haverkamp&amp;website=http%3A%2F%2Flocalhost%2Fstage%2Fwebshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-NL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/stage/webshop/admin378e5kpgu/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Verbind uw winkel met PrestaShop-marktplaats om al uw Addons-aankopen automatisch te importeren.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>U heeft nog geen account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Ontdek de kracht van PrestaShop Addons! Ontdek de officiële PrestaShop Addons marktplaats en vind meer dan 3.500 innovatieve modules en thema's die de conversie optimaliseren, meer verkeer genereren, die bouwen aan klantloyaliteit en uw productiviteit maximaliseren</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Verbinden met PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/nl/forgot-your-password\">Ik ben mijn wachtwoord vergeten</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/nl/login?email=lemonture%40gmail.com&amp;firstname=Alex&amp;lastname=Haverkamp&amp;website=http%3A%2F%2Flocalhost%2Fstage%2Fwebshop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-NL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tAccount aanmaken
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Inloggen
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1316
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1147
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1148
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1149
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1150
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1316
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__39a26e0c23ec3b0656194c1413e4e448fb47e9dbffe72ff1b798055e976ef8e2";
    }

    public function getDebugInfo()
    {
        return array (  1395 => 1316,  1390 => 1150,  1385 => 1149,  1380 => 1148,  1375 => 1147,  1366 => 82,  1358 => 1316,  1191 => 1151,  1188 => 1150,  1185 => 1149,  1182 => 1148,  1180 => 1147,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__39a26e0c23ec3b0656194c1413e4e448fb47e9dbffe72ff1b798055e976ef8e2", "");
    }
}
