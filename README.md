# Bio Link Site - Installation Guide
# Example: https://personal-bio-card.vercel.app/

This project is designed to run on a web hosting server.

## 📂 File Structure
Upload the following files to your hosting account:

1. `index.html` - Main page  
2. `admin.html` - Admin panel (Password: mitamers2026makrit)  
3. `config.json` - Settings file  
4. `save.php` - PHP file required to save settings  

## 🚀 Hosting Setup
1. Purchase a web hosting service (cPanel, Plesk, etc.) or log in to your existing hosting account.
2. Upload the 4 files listed above to the `public_html` folder or your website’s root directory.
3. **IMPORTANT:** Grant write permission to the `config.json` file (**CHMOD 777 or 755**).
   - In cPanel: File Manager → Right-click `config.json` → Permissions → Set to 777.
   - If this permission is not granted, changes made in the Admin panel will not be saved!

## 🔐 Admin Panel
- After uploading your site, go to:
  `yourdomain.com/admin.html`
- Password: `mitamers2026makrit`
- From here, you can modify all settings (Name, Music, Background, etc.).

## ⚠️ Notes
- This system works only on hosting services that support PHP (GoDaddy, Hostinger, Cenuta, etc.).
- On platforms that only support static HTML (such as GitHub Pages or Vercel), the "Save" button will not function.
