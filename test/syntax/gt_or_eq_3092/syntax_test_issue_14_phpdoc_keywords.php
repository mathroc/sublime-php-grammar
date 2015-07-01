// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
 * @api
//   ^ keyword
 * @valid
//   ^ keyword
 */

/**
 * @api@
//  ^ -keyword
 * @@api@@
//  ^ -keyword
 * @@api
//  ^ -keyword
 * @api$
//  ^ -keyword
 *@api
//  ^ -keyword
 *@api
//  ^ -keyword
 * name@api.com
// ^ -keyword
//       ^ -keyword
 * name@api
// ^ -keyword
//  ^ -keyword
//   ^ -keyword
//    ^ -keyword
//     ^ -keyword
//      ^ -keyword
//       ^ -keyword
//        ^ -keyword
 */
