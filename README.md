# Forkel Grids
Forkel Grids is a collection of different adminhtml grids and tested code you can use for your project.

![Forkel Grids - Preview](https://raw.githubusercontent.com/tobias-forkel/Forkel_Grids/master/preview.gif)

## Installation
1. Pull the code.
2. Copy the code to your document root directory where the `/app/` folder is located.
3. After installation you should see a new menu item " Forkel " in the admin panel.
4. You should find a record " forkel_grids_setup " in table " core_resource ". Use `select * from core_resource where code = 'forkel_grids_setup';`

## Features
* A basic grid
* A basic readonly grid
* Grid with Renderer and custom help block

## Usage
The functionality can be used in the backend section `Forkel > Grids`.

## Support
If you have any issues with this extension, open an issue on [Github](https://github.com/tobias-forkel/Forkel_Grids/issues)

## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push to the branch: `git push origin my-new-feature`.
5. Submit a pull request. :)

## History
===== 0.0.2 =====
* Added a basic read only grid

===== 0.0.1 =====
* Initial version of this module
* Added a basic grid
* Added a basic grid with a simple renderer
* Added help block to renderer grid

## License
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
