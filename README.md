echo "# demoreadme" >> README.md  
git init  
git add README.md  
git commit -m "first commit"  
git branch -M main  
git remote add origin https://github.com/jordantsap/l8eshop.git  
git push -u origin main  

## Push an existing repository from the command line 
git remote add origin https://github.com/jordantsap/l8eshop.git  
git branch -M main
git push -u origin main  

## Next, oneliner for full installation, ";" instead of "&&" to stop if something go wrong
```bash
git clone https://github.com/jordantsap/l8eshop.git; cd l8eshop;composer install; php artisan migrate --seed;php artisan serve
```

