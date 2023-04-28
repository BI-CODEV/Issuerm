
## Acknowledgements
 You can add this code to a controller file in your Laravel project and create a route to access it. For example, you could add the following to your  

## Deployment

To deploy this project run

```bash
  web.php 
```

```bash
 Route::get('/clear-caches', [CacheController::class, 'clearAllCaches']);

```
# Info
If you encounter any errors or issues, Laravel will typically log them in the 

```bash
  storage/logs 
```
directory. You can view the logs by running php artisan serve in your terminal and then navigating to 
```bash
  http://localhost:8000/storage/logs/laravel.log 
```
in your browser


## Authors

- [@octokatherine](https://www.github.com/imranniaz)

