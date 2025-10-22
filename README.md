# New Journey — PHP include demo

This repository shows how to include reusable parts (header and footer) and how to link the existing Bootstrap assets.

Project layout:
- public/ — web root (serve this folder)
  - index.php — example page
  - css/, js/ — Bootstrap assets
- server/ — reusable PHP parts
  - header.php, footer.php
- scripts/
  - serve.ps1 — helper to start the PHP dev server on Windows

Run locally on Windows (no Apache required)
Option A — easiest (auto-detect PHP):
1) In PowerShell, from the project root, run:
   powershell -ExecutionPolicy Bypass -File scripts\serve.ps1
2) Open http://localhost:8000/ in your browser.

Option B — PHP already installed on PATH:
1) In PowerShell, from the project root, run:
   php -S localhost:8000 -t public
2) Open http://localhost:8000/ in your browser.

If "php" is not found (install PHP):
- Official builds: https://windows.php.net/download/
  - Download the Thread Safe x64 ZIP for your PHP version, extract (e.g., C:\php), then run C:\php\php.exe -v
  - Add C:\php to PATH: Settings -> System -> About -> Advanced system settings -> Environment Variables -> Path -> New -> C:\php, then open a new PowerShell and run php -v
- Scoop (package manager):
  - Install Scoop: Set-ExecutionPolicy RemoteSigned -Scope CurrentUser; iwr -useb get.scoop.sh | iex
  - Install PHP: scoop install main/php
- Chocolatey:
  - Install Chocolatey: https://chocolatey.org/install
  - Install PHP: choco install php -y
- XAMPP users:
  - Use the bundled PHP at C:\xampp\php\php.exe, e.g.:
    C:\xampp\php\php.exe -S localhost:8000 -t public

Troubleshooting PATH
- Check: php -v (should print version)
- Locate: where.exe php (shows which php.exe will run)
- Use a full path if needed: "C:\Program Files\php\php.exe" -S localhost:8000 -t public

Using includes in your own pages
- Pages inside public/ can include the shared parts like this:
  <?php
  $pageTitle = 'My Page';
  require __DIR__ . '/../server/header.php';
  ?>
  <main class="container">
    <!-- your content -->
  </main>
  <?php require __DIR__ . '/../server/footer.php'; ?>

Notes
- Use require when the file is mandatory (fatal error if missing), include when optional (warning if missing).
- The header/footer compute the correct relative path to css/ and js/ so assets work even when your PHP file is in a subfolder under public/.
