<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'news_carbon' );
function news_carbon() {

    Container::make( 'post_meta', 'Добавить новость' )
        ->where( 'post_type', '=', 'newstest' )
        ->add_fields( array(

            Field::make( 'text', 'news_title', 'Заголовок' ),
            Field::make( 'rich_text', 'news_text', 'Текст новости' ),
            Field::make( 'media_gallery', 'news_img', 'Картинка' ),
            Field::make( 'date_time', 'news_date', 'Дата новости' ),

        ) );

}

add_action( 'carbon_fields_register_fields', 'products_carbon' );
function products_carbon() {

    Container::make( 'post_meta', 'Добавить продукт' )
        ->where( 'post_type', '=', 'productstest' )
        ->add_fields( array(

            Field::make( 'text', 'prod_title', 'Название' ),
            Field::make( 'rich_text', 'prod_text', 'Описание' ),
            Field::make( 'media_gallery', 'prod_img', 'Галерея' ),
            Field::make( 'textarea', 'prod_compound', 'Комплектация' ),
            Field::make( 'select', 'prod_brand', 'Производитель' )
                ->add_options( available_brand() ),
            Field::make( 'text', 'prod_price', 'Стоимость' ),

        ) );

}

function available_brand(){
    return [
        '1' => 'Apple',
        '2' => 'Google',
        '3' => 'Xiaomi',
    ];
}