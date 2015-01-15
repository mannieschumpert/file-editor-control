# File Editor Control

Allows you to control who has file editor capabilities in the WordPress admin.

## Usage
There's no UI. In your functions.php, add a filter that returns an array of user IDs that are allowed to edit files. By default, user ID 1 is allowed to edit files.

Of course you can always just copy the plugin code and put it in your functions directly.

# Examples
Prevent all file editor access by passing an empty array:

```php
add_filter( 'fec_allowed_file_editors', 'my_allowed_file_editors' );
function my_allowed_file_editors( $allowed_editors ){

	return array();
}
```

Change allowed users:

```php
add_filter( 'fec_allowed_file_editors', 'my_allowed_file_editors' );
function my_allowed_file_editors( $allowed_editors ){

	return array( 2, 4 );
}
```