<?php

return array(
    'name' => 'post',
    'elements' => array(
        'title' => array(
            'label' => t('Create post', 'Post'),
        ),
        'name' => array(
            'data-source' => l('/post/ajax/name'),
        ),
        'body' => array(
        ),
        'actions' => array(
            'elements' => array(
                'buttons' => array(
                    'elements' => array(
                        'preview' => array(
                        ),
                        'draft' => array(
                        ),
                        'publish' => array(
                        ),
                    ),
                ),
                'delete' => array(
                ),
            )
        ),
    ),
);