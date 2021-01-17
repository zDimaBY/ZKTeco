<?php

/* marketplace/opencartforum_info.twig */
class __TwigTemplate_92c2402208ae4dd7af866a7159249c7651dd3e281012807796ac36e3d62de8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">";
        // line 14
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>";
        }
        // line 19
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i>";
        // line 21
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"row extension-info\">
          <div class=\"col-sm-8\">";
        // line 25
        if ((isset($context["banner"]) ? $context["banner"] : null)) {
            // line 26
            echo "            <div id=\"banner\" class=\"text-center thumbnail\"><img src=\"";
            echo (isset($context["banner"]) ? $context["banner"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></div>";
        }
        // line 28
        echo "            <div class=\"row thumbnails\">";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "              <div class=\"col-xs-4 col-sm-2\"><a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" class=\"thumbnail\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["image"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["image"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
              <li><a href=\"#tab-changelog\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_changelog"]) ? $context["tab_changelog"] : null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane active\">";
        // line 36
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
              <div id=\"tab-changelog\" class=\"tab-pane\">";
        // line 37
        echo (isset($context["changelog"]) ? $context["changelog"] : null);
        echo "</div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div id=\"buy\" class=\"well\">";
        // line 41
        if ((((isset($context["license"]) ? $context["license"] : null) == "1") &&  !(isset($context["purchased"]) ? $context["purchased"] : null))) {
            // line 42
            echo "              <a target=\"_blank\" href=\"";
            echo (isset($context["extension_url"]) ? $context["extension_url"] : null);
            echo "?utm_source=ocstore_marketplace\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            echo (isset($context["button_purchase"]) ? $context["button_purchase"] : null);
            echo "</a>";
        }
        // line 44
        echo "              <div id=\"price\" class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 45
        echo (isset($context["text_price"]) ? $context["text_price"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 46
        if ((isset($context["license"]) ? $context["license"] : null)) {
            // line 47
            echo (isset($context["price"]) ? $context["price"] : null);
        } else {
            // line 49
            echo (isset($context["text_free"]) ? $context["text_free"] : null);
        }
        // line 50
        echo "</div>
              </div>
              <hr>
              <ul class=\"list-check\">";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cfields"]) ? $context["cfields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 55
            echo "                    <li>";
            echo $this->getAttribute($context["field"], "name", array());
            echo ":";
            echo $this->getAttribute($context["field"], "value", array());
            echo "</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "              </ul>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 60
        echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            if (((isset($context["rating"]) ? $context["rating"] : null) >= $context["i"])) {
                echo "<i class=\"fa fa-star\"></i>";
            } else {
                echo "<i class=\"fa fa-star-o\"></i>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo " (";
        echo (isset($context["rating_total"]) ? $context["rating_total"] : null);
        echo ")</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 67
        echo (isset($context["text_date_modified"]) ? $context["text_date_modified"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 68
        echo (isset($context["date_modified"]) ? $context["date_modified"] : null);
        echo "</div>
              </div>
              <hr>
              <div class=\"row\">
                <div class=\"col-xs-5\"><strong>";
        // line 72
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</strong></div>
                <div class=\"col-xs-7 text-right\">";
        // line 73
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</div>
              </div>
            </div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 76
        echo (isset($context["sales"]) ? $context["sales"] : null);
        echo "</strong>";
        echo (isset($context["text_sales"]) ? $context["text_sales"] : null);
        echo "</div>
            <div id=\"sales\" class=\"well\"><i class=\"opencart-icon-cart-mini\"></i> <strong>";
        // line 77
        echo (isset($context["downloaded"]) ? $context["downloaded"] : null);
        echo "</strong>";
        echo (isset($context["text_downloaded"]) ? $context["text_downloaded"] : null);
        echo "</div>
            <div class=\"well\">
              <div class=\"media\">
                <div class=\"media-left media-middle\"><img src=\"";
        // line 80
        echo (isset($context["member_image"]) ? $context["member_image"] : null);
        echo "\" alt=\"";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "\" title=\"";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "\" class=\"media-object img-circle\"></div>
                <div class=\"media-body\"> <span><a target=\"_blank\" href=\"";
        // line 81
        echo (isset($context["member_url"]) ? $context["member_url"] : null);
        echo "\">";
        echo (isset($context["member_username"]) ? $context["member_username"] : null);
        echo "</a></span><br>
                  <small>";
        // line 82
        echo (isset($context["text_member_since"]) ? $context["text_member_since"] : null);
        echo (isset($context["member_date_added"]) ? $context["member_date_added"] : null);
        echo "</small></div>
              </div>
              <br />
              <a href=\"";
        // line 85
        echo (isset($context["filter_member"]) ? $context["filter_member"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_view_all"]) ? $context["button_view_all"] : null);
        echo "</a> <a href=\"https://opencartforum.com/topic/";
        echo (isset($context["topicid"]) ? $context["topicid"] : null);
        echo "-";
        echo (isset($context["topicseoname"]) ? $context["topicseoname"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-ghost-dark btn-lg btn-block\">";
        echo (isset($context["button_get_support"]) ? $context["button_get_support"] : null);
        echo "</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
function next(url, element, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t}
\t\t\t
\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], element, i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled:true
\t\t}
\t});
});
//--></script> 
</div>";
        // line 137
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "marketplace/opencartforum_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 137,  261 => 85,  254 => 82,  248 => 81,  240 => 80,  232 => 77,  226 => 76,  220 => 73,  216 => 72,  209 => 68,  205 => 67,  197 => 63,  187 => 62,  183 => 61,  179 => 60,  174 => 57,  164 => 55,  160 => 54,  155 => 50,  152 => 49,  149 => 47,  147 => 46,  143 => 45,  140 => 44,  133 => 42,  131 => 41,  124 => 37,  120 => 36,  114 => 33,  110 => 32,  106 => 30,  92 => 29,  87 => 28,  78 => 26,  76 => 25,  69 => 21,  65 => 19,  58 => 15,  56 => 14,  51 => 11,  41 => 9,  37 => 8,  33 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div id="marketplace-extension-info" class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ name }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="row extension-info">*/
/*           <div class="col-sm-8">{% if banner %}*/
/*             <div id="banner" class="text-center thumbnail"><img src="{{ banner }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></div>*/
/*             {% endif %}*/
/*             <div class="row thumbnails">{% for image in images %}*/
/*               <div class="col-xs-4 col-sm-2"><a href="{{ image.popup }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}" class="img-responsive" /></a></div>*/
/*               {% endfor %} </div>*/
/*             <ul class="nav nav-tabs">*/
/*               <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_general }}</a></li>*/
/*               <li><a href="#tab-changelog" data-toggle="tab">{{ tab_changelog }}</a></li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*               <div id="tab-description" class="tab-pane active">{{ description }}</div>*/
/*               <div id="tab-changelog" class="tab-pane">{{ changelog }}</div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-sm-4">*/
/*             <div id="buy" class="well">{% if license == '1' and not purchased %}*/
/*               <a target="_blank" href="{{ extension_url }}?utm_source=ocstore_marketplace" id="button-buy" class="btn btn-success btn-lg btn-block">{{ button_purchase }}</a>*/
/*               {% endif %}*/
/*               <div id="price" class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_price }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{% if license %}*/
/*                   {{ price }}*/
/*                   {% else %}*/
/*                   {{ text_free }}*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <hr>*/
/*               <ul class="list-check">*/
/*                   {% for field in cfields %}*/
/*                     <li>{{ field.name }}: {{ field.value|raw }}</li>*/
/*                   {% endfor %}*/
/*               </ul>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_rating }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{% for i in 1..5 %}*/
/*                   {% if rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                   {% endfor %} ({{ rating_total }})</div>*/
/*               </div>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_date_modified }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{{ date_modified }}</div>*/
/*               </div>*/
/*               <hr>*/
/*               <div class="row">*/
/*                 <div class="col-xs-5"><strong>{{ text_date_added }}</strong></div>*/
/*                 <div class="col-xs-7 text-right">{{ date_added }}</div>*/
/*               </div>*/
/*             </div>*/
/*             <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong>{{ sales }}</strong> {{ text_sales }}</div>*/
/*             <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong>{{ downloaded }}</strong> {{ text_downloaded }}</div>*/
/*             <div class="well">*/
/*               <div class="media">*/
/*                 <div class="media-left media-middle"><img src="{{ member_image }}" alt="{{ member_username }}" title="{{ member_username }}" class="media-object img-circle"></div>*/
/*                 <div class="media-body"> <span><a target="_blank" href="{{ member_url }}">{{ member_username }}</a></span><br>*/
/*                   <small>{{ text_member_since }} {{ member_date_added }}</small></div>*/
/*               </div>*/
/*               <br />*/
/*               <a href="{{ filter_member }}" class="btn btn-primary btn-lg btn-block">{{ button_view_all }}</a> <a href="https://opencartforum.com/topic/{{ topicid }}-{{ topicseoname }}" target="_blank" class="btn btn-ghost-dark btn-lg btn-block">{{ button_get_support }}</a></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* function next(url, element, i) {*/
/* 	i = i + 1;*/
/* */
/* 	$.ajax({*/
/* 		url: url,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#progress-bar').css('width', (i * 20) + '%');*/
/* */
/* 			if (json['error']) {*/
/* 				$('#progress-bar').addClass('progress-bar-danger');*/
/* 				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('#progress-bar').addClass('progress-bar-success');*/
/* 				$('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');*/
/* 			}*/
/* 			*/
/* 			if (json['text']) {*/
/* 				$('#progress-text').html(json['text']);*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				next(json['next'], element, i);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type:'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled:true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* </div>*/
/* {{ footer }} */
/* */
