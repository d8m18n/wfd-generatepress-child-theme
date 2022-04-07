# Child theme setup

This Generate Press child theme uses @wordpress/scripts for its build process.

See: https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/

Run NPM run start for development

Run NPM preview for browser sync

Run NPM run build for production build

Composer installs the PHPCS linter for WordPress coding standards.

## Basic approach

Anything that can be configured in Generate Press should be.

All section and colums layout should be done with Generate Blocks - layout within sections, columnns and blocks should use whatever is appropriate.

Make use of GeneratePress elements for transparent headers and for the footer section.

## Use the Generate Press Pro and Generate Blocks Pro documentation

https://docs.generatepress.com/

https://docs.generateblocks.com/

https://mikeoliver.me/category/generateblocks/

## Sass / CSS

We're using sass for custom css styling as such;

src/styles/style.scss - is the main scss file
src/styles/aditor.scss - is theeditor scss file

## Typography

It is preferred that we install fonts locally

All font sizes to be set in REM's

## Spacing

The site design uses an 8px grid - everything should have a size divisible by 8 - always

## SVG

General rule is anything that can be SVG should be SVG

SVG Icons should always be inlined - the Generate Blocks Headline block has options of inline SVG. 

## Usefull resources

This video explains some important aspects of using elements

https://cln.sh/wvaICU?fbclid=IwAR2UzLo3jsXJfq05H-7duLKZbYqsa880sFKcgKCPO5bUy_vKhcXYnCrX3fw

Whatch from 6:35 re top header.

How to create custom dynamic blog archives: https://pagebuildersummit.com/speaker/mike-oliver-how-to-create-custom-dynamic-blog-archives/

When it's available this course would be good: https://mikeoliver.me/generatepress-generateblocks-course/