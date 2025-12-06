<?php require_once base_path('views/partials/head.php'); ?>

<button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar" aria-controls="separator-sidebar" type="button" class="fixed top-3 left-3 z-50 inline-flex items-center p-2 text-sm text-heading rounded-base lg:hidden hover:bg-neutral-secondary-medium focus:outline-none focus:ring-2 focus:ring-neutral-tertiary">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
    </svg>
</button>

<aside id="separator-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0 bg-neutral-primary-soft border-e border-default" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#f5f5f5] border-e border-default">
        <a href="/" class="flex items-center ps-2.5 mb-5">
            <img src="assets/navlogo.png" class="h-6 me-3" alt="Logo" />
            <?php foreach ($ids as $type => $id): ?>
                <span class="self-center text-lg text-heading font-semibold whitespace-nowrap">
                    <?= ucfirst($type) ?> ID: <?= htmlspecialchars($id) ?>
                </span>
            <?php endforeach; ?> 
        </a>
        <ul class="space-y-2 font-medium">

            <!-- Dashboard -->
            <li>
                <a href="#" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <!-- Home Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M4 10v10h6V14h4v6h6V10" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <!-- Home Dropdown -->
            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-home" data-collapse-toggle="dropdown-home">

                    <!-- Pencil Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07A4.5 4.5 0 018.685 17.2L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931z" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Home</span>

                    <!-- Arrow -->
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-home" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>

            <!-- About Dropdown -->
            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-about" data-collapse-toggle="dropdown-about">

                    <!-- Info Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">About</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-about" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h2.5l1-1h3l1 1H17a2 2 0 012 2v14a2 2 0 01-2 2z" />
                    </svg>

                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Programs & Services</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#" class="pl-10 flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">Create</a>
                    </li>
                    <li>
                        <a href="#" class="pl-10 flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">Edit</a>
                    </li>
                    <!-- <li>
                        <a href="#" class="pl-10 flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">Update</a>
                    </li> -->
                    <li>
                        <a href="#" class="pl-10 flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">Delete</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body 
                    rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-plans" data-collapse-toggle="dropdown-plans">

                    <!-- Chart Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3v18h18M7 14l3-3 4 4 5-6" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Strategic Plans</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-plans" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body 
                    rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-testimonials" data-collapse-toggle="dropdown-testimonials">

                    <!-- Chat Bubble Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 8h10M7 12h6m-6 4h4m9-4a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Testimonials</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-testimonials" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body 
                    rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-news" data-collapse-toggle="dropdown-news">

                    <!-- Newspaper Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 6h16M4 10h16M4 14h10M4 18h6" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">News & Updates</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-news" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body 
                    rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-gallery" data-collapse-toggle="dropdown-gallery">

                    <!-- Photo Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 7a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7zm3 10l4-4 3 3 4-5" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Gallery</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-gallery" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full justify-between px-2 py-1.5 text-body 
                    rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group"
                    aria-controls="dropdown-contact" data-collapse-toggle="dropdown-contact">

                    <!-- Phone Icon -->
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 5a2 2 0 012-2h2l2 5-2 1a11 11 0 006 6l1-2 5 2v2a2 2 0 01-2 2h-1C9.82 21 3 14.18 3 6V5z" />
                    </svg>

                    <span class="flex-1 ms-3 text-left whitespace-nowrap">Contact</span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <ul id="dropdown-contact" class="hidden py-2 space-y-2">
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Create</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Edit</a></li>
                    <li><a href="#" class="pl-10 block px-2 py-1.5 hover:bg-neutral-tertiary hover:text-fg-brand">Delete</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <svg class="w-5 h-5 group-hover:text-fg-brand" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 013 3v10a3 3 0 01-3 3h-2" />
                    </svg>

                    <?php if ($_SESSION['user'] ?? false) : ?>
                        <form action="/session" method="POST">
                            <input type="hidden" name="_method" value="DELETE" />
                            <button class="flex-1 ms-3 whitespace-nowrap">Log Out</button>
                        </form>
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 lg:ml-64">
    <section id="home">
        <?php require base_path('views/index.view.php'); ?>
    </section>

    <section id="about">
        <?php require base_path('views/about.view.php'); ?>
    </section>

    <section id="program-services">
        <?php require base_path('views/program_services/index.view.php'); ?>
    </section>

    <section id="strategic-plans">
        <?php require base_path('views/strategic-plans/index.view.php'); ?>
    </section>

    <section id="testimonials">
        <?php require base_path('views/testimonials/index.view.php'); ?>
    </section>

    <section id="news-updates">
        <?php require base_path('views/news_updates/index.view.php'); ?>
    </section>

    <section id="gallery">
        <?php require base_path('views/gallery/index.view.php'); ?>
    </section>

    <section id="contact">
        <?php require base_path('views/contact.view.php'); ?>
    </section>
    <?php
    require_once base_path('views/partials/footer.php');
    ?>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const drawerBtn = document.querySelector('[data-drawer-toggle="separator-sidebar"]');
        const sidebar = document.getElementById('separator-sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        const body = document.body;

        const toggleSidebar = () => {
            // Toggle sidebar visibility
            sidebar.classList.toggle('-translate-x-full');

            // Toggle Backdrop visibility
            backdrop.classList.toggle('hidden');

            // Lock body scroll if menu is open (mobile/tablet only)
            if (!backdrop.classList.contains('hidden')) {
                body.style.overflow = 'hidden';
            } else {
                body.style.overflow = '';
            }
        };

        // Click on Hamburger
        if (drawerBtn) {
            drawerBtn.addEventListener('click', toggleSidebar);
        }

        // Click on Backdrop (Close menu)
        if (backdrop) {
            backdrop.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('hidden');
                body.style.overflow = '';
            });
        }

        // Your existing dropdown logic...
        document.querySelectorAll('[data-collapse-toggle]').forEach(button => {
            button.addEventListener('click', () => {
                const targetId = button.getAttribute('data-collapse-toggle');
                const target = document.getElementById(targetId);
                target.classList.toggle('hidden');
            });
        });
    });
</script>