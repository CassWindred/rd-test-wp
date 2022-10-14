<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />

</head>

<div class="header">
    <div>
        <!-- Search Header -->
        <div class="font-bold flex px-10 border-b border-b-gray-700/10">
            <div class="px-3 br-1 border-l border-r border-gray-700/10">Search</div>
            <div class="grow"></div>
            <div class="px-3 br-1 border-l border-r border-gray-700/10 border-b-2 border-b-theme-pastelgreen">Learn</div>
            <div class="px-3 br-1 border-l border-r border-gray-700/10 bg-theme-purple text-white">Donate</div>
        </div>
        <!-- /Search Header -->
        <!-- Main Header -->
        <div class="px-10 py-3 h-16 flex">
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/logo.svg'; ?>" width="50">
            <div class="flex flex-col justify-center">
                <div class="text-2xl flex-none leading-5">Good Things</div>
                <div class="flex-none leading-3">Foundation</div>
            </div>
            <div class="font-bold flex grow gap-6 justify-end items-center">
                <a href="/">Home</a>
                <a href="/events">Events</a>
            </div>
        </div>
    </div>
</div>