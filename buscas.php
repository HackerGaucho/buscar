<?php
$arr=[
    '4shared'=>'https://www.4shared.com/web/q/#query=%s&sort=size%2Cdesc',
    //'acrônimos'=>'https://www.acronymfinder.com/~/search/af.aspx?string=exact&Acronym=%s',
    //'alexa'=>'https://alexa.com/siteinfo/%s',
    'allmusic'=>'https://www.allmusic.com/search/all/%s',
    //'antonimos'=>'https://www.antonimos.com.br/busca.php?q=%s',
    'archive'=>'https://archive.org/search.php?query=%s',
    'atom'=>'https://atom.io/packages/search?q=%s',
    'books'=>'https://br1lib.org/s/?q=%s',//https://book4you.org/s/?q=%s    
    //'buscape'=>'https://www.buscape.com.br/search?page=1&invalidPath=false&sortBy=prod_items_sort_by_price_asc&q=%s&no-shortcut=1',
    //'dev.to'=>'https://dev.to/search?q=%s',
    'dicionario'=>'https://www.infopedia.pt/dicionarios/lingua-portuguesa/%s',          
    'discogs'=>'https://www.discogs.com/search/?q=%s&type=all&format_exact=CD',    
    'docs (em espanhol)'=>'https://www.documaniatv.com/search.php?keywords=+%s',
    //'docs (nomes em espanhol)'=>'https://www.filmaffinity.com/es/search.php?stext=%s',    
    //'imdb'=>'https://www.imdb.com/find?q=%s&ref_=nv_sr_sm', 
    //'ip'=>'https://ipinfo.io/%s',   
    //'isdown'=>'https://downstatuscheck.com/search.php?q=%s',   
    'duck'=>'https://html.duckduckgo.com/html/?q=%s&kl=br-pt&ia=web',
    'emojipedia'=>'https://emojipedia.org/search/?q=%s',
    //'enciclopedia'=>'https://pt.wikipedia.org/w/index.php?search=%s',
    'en-pt'=>'https://context.reverso.net/traducao/ingles-portugues/%s',    
    'es-pt'=>'https://context.reverso.net/traducao/espanhol-portugues/%s',      
    'extensões'=>'https://addons.mozilla.org/en-US/firefox/search/?q=%s&type=extension',
    //'geonames'=>'https://www.geonames.org/search.html?q=%s',
    'github'=>'https://github.com/search?q=+%s+&type=repositories',
    'imdb'=>'https://www.imdb.com/find?q=%',
    //'imagens'=>'https://commons.wikimedia.org/w/index.php?search=%s&title=Special:MediaSearch&fulltext=Search',    
    //'informal'=>'https://www.dicionarioinformal.com.br/%s/',
    'instagram'=>'https://www.picuki.com/profile/%s',    
    'last.fm'=>'https://www.last.fm/search?q=%s',
    'letras'=>'https://www.letras.mus.br/?q=%s',
    //'limetorrents'=>'https://www.limetorrents.info/search/all/%s/seeds/1/',    
    'mdn'=>'https://developer.mozilla.org/en-US/search?q=%s',
    //'mapas'=>'https://www.google.com.br/maps?hl=pt&q=%s',
    //'mememaker'=>'https://imgflip.com/memesearch?q=%s',
    'mercado livre'=>'https://lista.mercadolivre.com.br/%s/_OrderId_PRICE',
    //'midi'=>'https://bitmidi.com/search?q=%s',    
    'mint'=>'https://community.linuxmint.com/software/view/%s',      
    'music'=>'https://music.youtube.com/search?q=%s',
    'notícias'=>'https://news.google.com/search?q=%s&hl=pt-BR&gl=BR&ceid=BR%3Apt-419',
    'oembed'=>'http://localhost/oembed/index.php?id=%s',
    'ok'=>'https://go.mail.ru/search_video?q=%s',
    'packagist'=>'https://packagist.org/?query=%s',
    'php'=>'https://www.php.net/manual-lookup.php?pattern=%s&scope=quickref',
    //'pkgs'=>'https://pkgs.org/download/%s',
    'pt-en'=>'https://context.reverso.net/traducao/portugues-ingles/%s',
    'pt-es'=>'https://context.reverso.net/traducao/portugues-espanhol/%s',        
    //'sci-hub'=>'https://sci-hub.se/%s',    
    'traduzir'=>'https://www.deepl.com/translator#en/pt/%s',
    //'tld'=>'https://tld-list.com/tld/%s',
    'tpb'=>'https://thepiratebay0.org/search/%s/1/99/0',
    'twitter'=>'https://twitter.com/search?q=%22%s%22%20lang%3Apt%20-filter:replies&src=typed_query&f=live',
    'unicode'=>'https://unicode-table.com/pt/search/?q=%s',
    'username'=>'http://localhost/username/index.php?user=%s',
    //'wikidata'=>'https://www.wikidata.org/w/index.php?search=%s',
    'youtube'=>'https://www.youtube.com/results?search_query=%s',
];
ksort($arr);
return $arr;
