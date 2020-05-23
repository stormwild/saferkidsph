saferkidsadmin
2&o$4dTDT^*M9!02K^

## WordPress
https://developer.wordpress.org/themes/functionality/custom-logo/

https://www.lyrathemes.com/blog/bootstrap-carousel-tutorial/
https://prabinparajuli.com.np/add-bootstrap-carousel-in-wordpress/
https://discourse.roots.io/t/solved-admin-theme-customizer/6107/4

```phtml
      <a class="navbar-brand brand" href="{{ home_url('/') }}">
        {{ get_bloginfo('name', 'display') }}
      <img class="img-fluid" src="@asset('images/saferkidsph-logo.png')" alt="{{ get_bloginfo('name', 'display') }}">
      </a>
```

```php
function site_brand() {

  // default to the blog name, in case no logo is set
  $output = get_bloginfo( 'name' );

  if ( has_custom_logo() ) {

    // get the url for the image
    $logo_url = wp_get_attachment_url(get_theme_mod( 'custom_logo' ));

    // wrap in image tag, save as string
    $logo   = '<img src="' . $logo_url . '" alt="' . get_bloginfo( 'name' )  . ' logo" title="' . . '">';

    // optional, hide the site name, screen reader friendly
    $output = '<span class="sr-only">' . get_bloginfo( 'name' ) . '</span>';

    // stick them together
    $output .= $logo;

  }

  return $output;

}
```

Then I call it in header.php (or wherever) like this -


```phtml
<?php use Roots\Sage\Extras; ?>

  // stuff

  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
    <?= Extras\site_brand(); ?>
  </a>
```


## Ubuntu HyperV VNC

https://askubuntu.com/questions/1030276/ubuntu-server-18-04-lts-cannot-change-resolution-in-hyper-v
https://ubuntu.com/tutorials/tutorial-ubuntu-desktop-aws#1-overview
https://stackoverflow.com/questions/25657596/how-to-set-up-gui-on-amazon-ec2-ubuntu-server

https://superuser.com/questions/184338/how-to-change-screen-resolution-of-vnc-server-without-restarting-it
