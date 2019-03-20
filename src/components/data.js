const checklist = [
  {
    heading: 'Head',
    list: [
      {
        type: 'Doctype',
        description: 'The Doctype is HTML5 and is at the top of all HTML pages.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Charset',
        description: 'The charset declared (UTF-8) is declared correctly.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Viewport',
        description: 'The viewport is declared correctly.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Title',
        description: 'A title is used on all pages',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Description',
        description: 'A meta description is provided, it is unique and doesn\'t possess more than 150 characters.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Favicons',
        description: 'Each favicon has been created and displays correctly.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Apple web app meta',
        description: 'Apple meta-tags are present.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Windows tiles',
        description: 'Windows tiles are present and linked.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Canonical',
        description: 'Use rel="canonical" are being used to avoid duplicate content.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Language attribute',
        description: 'The `<code>lang</code>` attribute of website is specified and related to the language of the current page.',
        tags: ['meta tag'],
        checked: false,
      },
      {
        type: 'Alternate language',
        description: 'The language tag of website is specified and related to the language of the current page.',
        tags: ['html tag'],
        checked: false,
      },
      {
        type: 'Conditional comments',
        description: 'Conditional comments are present for IE if needed.',
        tags: ['html tag'],
        checked: false,
      },
      {
        type: 'RSS feed',
        description: 'If project is a blog or has articles, RSS link is provided.',
        tags: ['html tag'],
        checked: false,
      },
      {
        type: 'Inline critical CSS',
        description: 'The inline critical CSS is correctly injected in the HEAD tag.',
        tags: ['html tag', 'css', 'performance'],
        checked: false,
      },
      {
        type: 'CSS order',
        description: 'All CSS files are loaded before any JavaScript files in the HEAD tag.',
        tags: ['html tag'],
        checked: false,
      },
      {
        type: 'Facebook Open Graph',
        description: 'Tags with attributes are added correctly.',
        tags: ['social meta', 'testing'],
        checked: false,
      },
      {
        type: 'Twitter Card',
        description: 'Tags with attributes are added correctly.',
        tags: ['social meta', 'testing'],
        checked: false,
      },
    ],
  },
  {
    heading: 'Html',
    list: [
      {
        type: 'HTML5 Semantic Elements',
        description: 'HTML5 Semantic Elements are used appropriately (header, section, footer, main,...).',
        tags: ['html', 'best practices'],
        checked: false,
      },
      {
        type: 'Error pages',
        description: 'Error 404 page and 5xx exist.',
        tags: ['html', 'best practices'],
        checked: false,
      },
      {
        type: 'Noopener',
        description: 'If project uses external links with target="_blank", link should have a rel="noopener" attribute to prevent tab nabbing.',
        tags: ['html', 'best practices', 'security'],
        checked: false,
      },
      {
        type: 'Clean up comments',
        description: 'Unnecessary code needs to be removed before sending the page to production.',
        tags: ['html', 'best practices'],
        checked: false,
      },
      {
        type: 'W3C compliant',
        description: 'All pages need to be tested with the W3C validator to identify possible issues in the HTML code.',
        tags: ['html', 'testing'],
        checked: false,
      },
      {
        type: 'HTML Lint',
        description: 'Using tools to help analyze any issues that could be in HTML code.',
        tags: ['html', 'testing'],
        checked: false,
      },
      {
        type: 'Link checker',
        description: 'There are no broken links in project, verify that there isn\'t any 404 error.',
        tags: ['html', 'testing'],
        checked: false,
      },
      {
        type: 'Adblockers test',
        description: 'Website shows content correctly with adblockers enabled.',
        tags: ['html', 'best practices'],
        checked: false,
      },
    ],
  },
  {
    heading: 'CSS',
    list: [
      {
        type: 'Responsive Web Design',
        description: 'The website is using responsive web design.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'CSS Print',
        description: 'A print stylesheet is provided and is correct on each page.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'Unique ID',
        description: 'If IDs are used, they are unique to a page.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'Reset CSS',
        description: 'A CSS reset (reset, normalize or reboot) is used and up to date.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'JS prefix',
        description: 'All classes (or IDs used in JavaScript files) begin with `js-` and are not styled in the CSS files.',
        tags: ['javascript', 'best practices'],
        checked: false,
      },
      {
        type: 'Embedded or inline CSS',
        description: 'Avoid at all cost embeding CSS in `<style>` tags or using inline CSS.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'Vendor prefixes',
        description: 'CSS vendor prefixes are used and are generated accordingly with project\'s browser support compatibility.',
        tags: ['css'],
        checked: false,
      },
      {
        type: 'Concatenation',
        description: 'CSS files are concatenated in a single file (Not for HTTP/2).',
        tags: ['css', 'performance'],
        checked: false,
      },
      {
        type: 'Minification',
        description: 'All CSS files are minified.',
        tags: ['css', 'performance'],
        checked: false,
      },
      {
        type: 'Non-blocking',
        description: 'CSS files need to be non-blocking to prevent the DOM from taking time to load.',
        tags: ['css', 'performance'],
        checked: false,
      },
      {
        type: 'Stylelint',
        description: 'All CSS or SCSS files are without any errors.',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'Responsive web design',
        description: 'All pages were tested with the correct breakpoints.',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'CSS Validator',
        description: 'The CSS was tested and pertinent errors were corrected.',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'Desktop browsers',
        description: 'All pages were tested on all current desktop browsers (Safari, Firefox, Chrome, Internet Explorer, EDGE,...).',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'Mobile browsers',
        description: 'All pages were tested on all current mobile browsers (Native browser, Chrome, Safari, ...).',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'Operating systems',
        description: 'All pages were tested on all current OS (Windows, Android, iOS, macOS, ...).',
        tags: ['css', 'testing'],
        checked: false,
      },
      {
        type: 'Reading direction',
        description: 'All pages were tested for LTR and RTL languages if they need to be supported.',
        tags: ['css', 'testing'],
        checked: false,
      },
    ],
  },
  {
    heading: 'JavaScript',
    list: [
      {
        type: 'JavaScript inline',
        description: 'There isn\'t any JavaScript code inline (mixed with HTML code).',
        tags: ['javascript'],
        checked: false,
      },
      {
        type: 'Concatenation',
        description: 'JavaScript files are concatenated.',
        tags: ['javascript'],
        checked: false,
      },
      {
        type: 'Minification',
        description: 'JavaScript files are minified (there can be .min suffix added).',
        tags: ['javascript'],
        checked: false,
      },
      {
        type: 'Noscript tag',
        description: 'Use `<noscript>` tag in the HTML body if a script type on the page is unsupported or if scripting is currently turned off in the browser. This will be helpful in client-side rendering heavy apps such as React.js.',
        tags: ['javascript'],
        checked: false,
      },
      {
        type: 'Non-blocking',
        description: 'JavaScript files are loaded asynchronously using async or deferred using defer attribute.',
        tags: ['javascript', 'performance'],
        checked: false,
      },
      {
        type: 'Modernizr',
        description: 'If there is need to target some specific features, there can be used a custom Modernizr to add classes in `<html>` tag.',
        tags: ['javascript'],
        checked: false,
      },
      {
        type: 'ESLint',
        description: 'No errors are flagged by ESLint (based on project configuration or standards rules).',
        tags: ['javascript', 'testing'],
        checked: false,
      },
    ],
  },
  {
    heading: 'Images',
    list: [
      {
        type: 'Optimization',
        description: 'All images are optimized to be rendered in the browser. WebP format could be used for critical pages (like Homepage).',
        tags: ['images, best practices'],
        checked: false,
      },
      {
        type: 'Picture and srcset',
        description: 'Use picture and srcset to provide the most appropriate image for the current viewport of the user.',
        tags: ['images'],
        checked: false,
      },
      {
        type: 'Retina',
        description: 'Provide layout images 2x or 3x, support retina display.',
        tags: ['images'],
        checked: false,
      },
      {
        type: 'Sprite',
        description: 'Small images are in a sprite file (in the case of icons, they can be in an SVG sprite image).',
        tags: ['images'],
        checked: false,
      },
      {
        type: 'Width and height',
        description: 'Set width and height attributes on `<img>` if the final rendered image size is known (can be omitted for CSS sizing).',
        tags: ['images'],
        checked: false,
      },
      {
        type: 'Alternative text',
        description: 'All `<img>` have an alternative text which describe the image visually.',
        tags: ['images'],
        checked: false,
      },
      {
        type: 'Lazy loading',
        description: 'Images are lazyloaded (A `<noscript>` fallback is always provided).',
        tags: ['images', 'performance'],
        checked: false,
      },
    ],
  },
];

export default checklist;
