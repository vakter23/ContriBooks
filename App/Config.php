<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'contribooks';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'dvwadmin';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'ZcLyF5RfJ9mLJMjQ';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'cHEHVJfm73ZxsMViWL2ZYnWfIcAP0CZ6';

    /**
     * Mailgun API key
     *
     * @var string
     */
    const MAILGUN_API_KEY = '60b2ca7be03b5a6ea2e51c2883146f7e';

    /**
     * Mailgun domain
     *
     * @var string
     */
    const MAILGUN_DOMAIN = 'sandbox2a83bcd787a745c0a488baeddac5624b.mailgun.org';
}
