<?php
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_lesson-fields',
        'title' => 'Lesson Fields',
        'fields' => array (
            array (
                'key' => 'field_54dfe9c18de6b',
                'label' => 'Student Resources',
                'name' => 'student_resources',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_54dfea498de6c',
                'label' => 'Instructor Resources',
                'name' => 'instructor_resources',
                'type' => 'wysiwyg',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_54e00c71aeea6',
                'label' => 'Practice Assignment: Name',
                'name' => 'practice_assignment:_name',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_54e00c9978c15',
                'label' => 'Practice Assignment:	Link',
                'name' => 'practice_assignment:__link',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-lesson.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
