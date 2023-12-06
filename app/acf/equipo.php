<?php
/*
Docs: https://github.com/StoutLogic/acf-builder
*/

$cargo = new StoutLogic\AcfBuilder\FieldsBuilder('cargo');

$cargo
    ->setGroupConfig('show_in_graphql', 'true') //Show in GraphQL
    ->addText('cargo')
    ->setLocation('post_type', '==', 'equipo');

add_action('acf/init', function() use ($cargo) {
   acf_add_local_field_group($cargo->build());
});