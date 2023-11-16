<?php
class HFP_MenuWalker extends Walker_Nav_Menu {
    
    private $dropdown_count = 0;

    function start_lvl(&$output, $depth = 0, $args = array()) {
        // Depth is used to determine the level of the submenu
        $indent = str_repeat("\t", $depth);

        $output .= '<div id="dropdownNavbar'.$this->dropdown_count.'" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">';
        $output .= "\n$indent<ul  class=\"py-2 text-sm text-gray-700 dark:text-gray-400\">\n";

        $this->dropdown_count++;
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        $output .= '</ul></div>';
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        // Check if the current item has children
        if ($args->walker->has_children) {
            $output .= '<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar' . $this->dropdown_count . '" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">' . esc_html($item->title) . ' <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg></button>';
        } else {
            if($depth > 0)
            {
                $output .= '<a href="' . esc_url($item->url) .'"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">' . esc_html($item->title) . '</a>';
            }
            else
            {
                $output .= '<a href="' . esc_url($item->url) . '" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500">' . esc_html($item->title) . '</a>';

            }
        }
    }
}
