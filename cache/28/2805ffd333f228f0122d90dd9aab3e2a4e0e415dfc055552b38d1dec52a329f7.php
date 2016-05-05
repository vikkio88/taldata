<?php

/* example.html */
class __TwigTemplate_e18503d077267962201752609853bcdef678c00b1df2fe75d91cef368a08da9e extends Twig_Template
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
        echo "<!DOCTYPE>
<html>

<head>
    <title>TalData</title>
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
    <script src=\"//code.highcharts.com/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/modules/exporting.js\"></script>
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
</head>
<script type=\"application/javascript\">
    function convertToMillisec(dateString){
        return Date.parse(dateString);
    }
    var dataList = ";
        // line 15
        echo (isset($context["json_data"]) ? $context["json_data"] : null);
        echo ";
    
    \$( document ).ready(function() {
        var dates= [];
        var balances = [];
        for(row in dataList){
            dates.push(convertToMillisec(dataList[row].fetched_at));
            balances.push(parseFloat(dataList[row].balance));
        }
        \$('#container').highcharts({
            title: {
                text: 'Tallinja Details for card #";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["card"]) ? $context["card"] : null), "html", null, true);
        echo "'
            },
            xAxis: {
                type: 'datetime',
                labels: {
                    formatter: function() {
                        return Highcharts.dateFormat('%a %d %b', this.value);
                    }
                },
                categories: dates
            },
            series: [{
                name: \"card #";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["card"]) ? $context["card"] : null), "html", null, true);
        echo "\",
                data: balances
            }]
        });
    });
</script>

<body>
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1>Tallinja data for # ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["card"]) ? $context["card"] : null), "html", null, true);
        echo " </h1></div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <th>Balance</th>
                        <th>Fetched At</th>
                    </thead>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 57
            echo "                    <tr>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "balance", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "fetched_at", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </table>
            </div>
        </div>

        <div id=\"container\" style=\"min-width: 300px; height: 300px; margin: 1em\"></div>


        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1>Random Talljnia data</h1></div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <th>Card #</th>
                        <th>Balance</th>
                        <th>Fetched At</th>
                    </thead>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["randoms"]) ? $context["randoms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 80
            echo "                    <tr>
                        <td><a href=\"./?c=";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "card_number", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "card_number", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "balance", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "fetched_at", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </table>
            </div>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h1>Richest Tallinja data</h1></div>
            <div class=\"panel-body\">
                <table class=\"table table-striped\">
                    <thead>
                        <th>Card #</th>
                        <th>Balance</th>
                        <th>Fetched At</th>
                    </thead>
                    <tr>
                        <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highest"]) ? $context["highest"] : null), "card_number", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highest"]) ? $context["highest"] : null), "balance", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["highest"]) ? $context["highest"] : null), "fetched_at", array()), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
        </div>



    </div>
</body>
<html>";
    }

    public function getTemplateName()
    {
        return "example.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 103,  174 => 102,  170 => 101,  153 => 86,  144 => 83,  140 => 82,  134 => 81,  131 => 80,  127 => 79,  108 => 62,  99 => 59,  95 => 58,  92 => 57,  88 => 56,  78 => 49,  64 => 38,  49 => 26,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE>*/
/* <html>*/
/* */
/* <head>*/
/*     <title>TalData</title>*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/*     <script src="//code.highcharts.com/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/modules/exporting.js"></script>*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* </head>*/
/* <script type="application/javascript">*/
/*     function convertToMillisec(dateString){*/
/*         return Date.parse(dateString);*/
/*     }*/
/*     var dataList = {{json_data|raw}};*/
/*     */
/*     $( document ).ready(function() {*/
/*         var dates= [];*/
/*         var balances = [];*/
/*         for(row in dataList){*/
/*             dates.push(convertToMillisec(dataList[row].fetched_at));*/
/*             balances.push(parseFloat(dataList[row].balance));*/
/*         }*/
/*         $('#container').highcharts({*/
/*             title: {*/
/*                 text: 'Tallinja Details for card #{{card}}'*/
/*             },*/
/*             xAxis: {*/
/*                 type: 'datetime',*/
/*                 labels: {*/
/*                     formatter: function() {*/
/*                         return Highcharts.dateFormat('%a %d %b', this.value);*/
/*                     }*/
/*                 },*/
/*                 categories: dates*/
/*             },*/
/*             series: [{*/
/*                 name: "card #{{card}}",*/
/*                 data: balances*/
/*             }]*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <body>*/
/*     <div class="container">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h1>Tallinja data for # {{card}} </h1></div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                         <th>Balance</th>*/
/*                         <th>Fetched At</th>*/
/*                     </thead>*/
/*                     {% for row in results %}*/
/*                     <tr>*/
/*                         <td>{{row.balance}}</td>*/
/*                         <td>{{row.fetched_at}}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="container" style="min-width: 300px; height: 300px; margin: 1em"></div>*/
/* */
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h1>Random Talljnia data</h1></div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                         <th>Card #</th>*/
/*                         <th>Balance</th>*/
/*                         <th>Fetched At</th>*/
/*                     </thead>*/
/*                     {% for row in randoms %}*/
/*                     <tr>*/
/*                         <td><a href="./?c={{row.card_number}}">{{row.card_number}}</a></td>*/
/*                         <td>{{row.balance}}</td>*/
/*                         <td>{{row.fetched_at}}</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h1>Richest Tallinja data</h1></div>*/
/*             <div class="panel-body">*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                         <th>Card #</th>*/
/*                         <th>Balance</th>*/
/*                         <th>Fetched At</th>*/
/*                     </thead>*/
/*                     <tr>*/
/*                         <td>{{highest.card_number}}</td>*/
/*                         <td>{{highest.balance}}</td>*/
/*                         <td>{{highest.fetched_at}}</td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* </body>*/
/* <html>*/
