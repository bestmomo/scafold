## Scafold ##

### Installation ###

Add Scafold to your composer.json file to require Scafold :
```
    require : {
        "laravel/framework": "5.1.*",
        "bestmomo/scafold": "dev-master"
    }
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    Bestmomo\Scafold\ScafoldServiceProvider::class,
```

### Publish ###

The last required step is to publish views and assets in your application with :
```
    php artisan vendor:publish
```

If you get the error
```
    Nothing to publish for tag []!
```

Then run this command :

```
    php artisan config:clear
```


Congratulations, you have successfully installed Scafold !

