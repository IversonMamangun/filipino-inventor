<?php require_once base_path('views/partials/head.php'); ?>

<main>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="assets/navlogo.png" alt="Your Company" class="mx-auto h-15 w-auto" />
      <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
        Register for new account
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form action="/register" method="POST" class="space-y-6">

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" type="email" name="email" required autocomplete="email"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 
                     outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 
                     focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

            <?php if (isset($errors['email'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          <div class="mt-2">
            <input id="password" type="password" name="password" required autocomplete="current-password"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 
                     outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 
                     focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

            <?php if (isset($errors['password'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Username -->
        <div>
          <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <input id="username" type="text" name="username" required autocomplete="username"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 
                     outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 
                     focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />

            <?php if (isset($errors['username'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['username'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- User Type -->
        <div>
          <label for="user_type" class="block text-sm/6 font-medium text-gray-900">User Type</label>
          <div class="mt-2">
            <select id="user_type" name="user_type" required
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 
             outline-1 -outline-offset-1 outline-gray-300 
             focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">

              <option value="">-- Select User Type --</option>

              <?php foreach ($userTypes as $type): ?>
                <option value="<?= $type['id'] ?>" <?= $user_type == $type['id'] ? 'selected' : '' ?>>
                  <?= ucfirst($type['name']) ?>
                </option>
              <?php endforeach; ?>

            </select>

            <?php if (isset($errors['user_type'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['user_type'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Submit -->
        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 
                   font-semibold text-white shadow-xs hover:bg-indigo-500 
                   focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Register
          </button>
        </div>
      </form>

      <!-- Back to Homepage -->
      <a href="../"
        class="<?= urlIs('/') ?> flex w-full justify-center rounded-md bg-indigo-600 px-3 mt-3 py-1.5 
               text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 
               focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Back to Homepage
      </a>
    </div>
  </div>
</main>