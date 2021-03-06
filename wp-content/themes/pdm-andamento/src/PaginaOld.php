<?php

namespace Pdm;

use Timber;

class Posts extends Pagina
{


    public static function startup($params)
    {
        $query = 'a=b';
        \Timber::load_template('index.php', $query);
    }


    public static function get_context()
    {
        $context = \Timber::get_context();
        $context['post_metas'] = Timber::get_posts([
            'post_type' => 'metas'
        ]);
        $context['post_ouse'] = Timber::get_posts([
            'post_type' => 'ouse'
        ]);
        $context['post_grande_tema'] = Timber::get_posts([
            'post_type' => 'grande_tema'
        ]);
        $context['post_acao'] = Timber::get_posts([
            'post_type' => 'acao'
        ]);
        $context['post_eixos'] = Timber::get_posts([
            'post_type' => 'eixos'
        ]);
        $context['post_indicador'] = Timber::get_posts([
            'post_type' => 'indicador'
        ]);

        return $context;
    }

}
