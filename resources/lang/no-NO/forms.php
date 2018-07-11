<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    // Setup form fields
    'setup' => [
        'email'            => 'E-post',
        'username'         => 'Brukernavn',
        'password'         => 'Passord',
        'site_name'        => 'Nettstedsnavn',
        'site_domain'      => 'Nettstedsdomene',
        'site_timezone'    => 'Velg tidssone',
        'site_locale'      => 'Velg språk',
        'enable_google2fa' => 'Aktiver Google to-faktor autentisering',
        'cache_driver'     => 'Cache-Driver',
        'session_driver'   => 'Økt Driver',
        'mail_driver'      => 'E-post driver',
        'mail_host'        => 'E-post tjener',
        'mail_address'     => 'E-post-fra adressen',
        'mail_username'    => 'E-post brukernavn',
        'mail_password'    => 'E-post passord',
    ],

    // Login form fields
    'login' => [
        'login'         => 'Brukernavn eller e-post',
        'email'         => 'E-post',
        'password'      => 'Passord',
        '2fauth'        => 'Autentiseringskode',
        'invalid'       => 'Ugyldig brukernavn eller passord',
        'invalid-token' => 'Ugyldig token',
        'cookies'       => 'Du må aktivere informasjonskapsler for å logge inn.',
        'rate-limit'    => 'Hyppighetsgrense overskredet.',
    ],

    // Incidents form fields
    'incidents' => [
        'name'               => 'Navn',
        'status'             => 'Status',
        'component'          => 'Komponent',
        'message'            => 'Melding',
        'message-help'       => 'Du kan også bruke Markdown.',
        'scheduled_at'       => 'When to schedule the maintenance for?',
        'incident_time'      => 'Når inntraff denne hendelsen?',
        'notify_subscribers' => 'Varsle abonnenter?',
        'visibility'         => 'Hendelsens synlighet',
        'public'             => 'Synlig for offentligheten',
        'logged_in_only'     => 'Bare synlig for innloggede brukere',
        'templates'          => [
            'name'     => 'Navn',
            'template' => 'Mal',
            'twig'     => 'Hendelsesmaler kan benytte <a href="http://twig.sensiolabs.org/" target="_blank">Twig</a> syntaks.',
        ],
    ],

    // Components form fields
    'components' => [
        'name'        => 'Navn',
        'status'      => 'Status',
        'group'       => 'Gruppe',
        'description' => 'Beskrivelse',
        'link'        => 'Lenke',
        'tags'        => 'Etiketter',
        'tags-help'   => 'Atskilt med komma.',
        'enabled'     => 'Komponent aktivert?',

        'groups' => [
            'name'               => 'Navn',
            'collapsing'         => 'Choose visibility of the group',
            'visible'            => 'Alltid utvidet',
            'collapsed'          => 'Skjul gruppen som standard',
            'collapsed_incident' => 'Skjul gruppen, men utvid hvis det er problemer',
        ],
    ],

    // Metric form fields
    'metrics' => [
        'name'             => 'Navn',
        'suffix'           => 'Suffiks',
        'description'      => 'Beskrivelse',
        'description-help' => 'Du kan også bruke Markdown.',
        'display-chart'    => 'Vise diagram på statussiden?',
        'default-value'    => 'Standardverdi',
        'calc_type'        => 'Kalkulering av beregninger',
        'type_sum'         => 'Sum',
        'type_avg'         => 'Gjennomsnittlig',
        'places'           => 'Desimalplasser',
        'default_view'     => 'Standardvisning',
        'threshold'        => 'Hvor mange minutter på terskel mellom metriske punkter?',

        'points' => [
            'value' => 'Verdi',
        ],
    ],

    // Settings
    'settings' => [
        /// Application setup
        'app-setup' => [
            'site-name'              => 'Nettstedsnavn',
            'site-url'               => 'Nettsteds-URL',
            'display-graphs'         => 'Vis grafer på statussiden?',
            'about-this-page'        => 'Om denne siden',
            'days-of-incidents'      => 'Hvor mange dager med hendelser vises?',
            'banner'                 => 'Bannerbilde',
            'banner-help'            => 'Det anbefales at du ikke laster opp bilder bredere enn 930 piksler.',
            'subscribers'            => 'Tillatt brukere å melde seg på for e-postvarslinger?',
            'automatic_localization' => 'Automatisk lokaliser statussiden til besøkendes språk?',
        ],
        'analytics' => [
            'analytics_google'       => 'Google Analytics-koden',
            'analytics_gosquared'    => 'GoSquared Analytics-koden',
            'analytics_piwik_url'    => 'URL-Adressen til din Piwik instans (uten http(s)://)',
            'analytics_piwik_siteid' => 'Piwiks site-id',
        ],
        'localization' => [
            'site-timezone'        => 'Nettstedets tidssone',
            'site-locale'          => 'Nettstedspråk',
            'date-format'          => 'Datoformat',
            'incident-date-format' => 'Hendelse tidsstempelformat',
        ],
        'security' => [
            'allowed-domains'      => 'Tillatte domener',
            'allowed-domains-help' => 'Atskilt med komma. Domenet ovenfor tillates automatisk som standard.',
        ],
        'stylesheet' => [
            'custom-css' => 'Tilpasset stilark',
        ],
        'theme' => [
            'background-color'        => 'Background Color',
            'background-fills'        => 'Bakgrunnsfyll (komponenter, hendelser, bunntekst)',
            'banner-background-color' => 'Banner bakgrunnsfarge',
            'banner-padding'          => 'Banner padding',
            'fullwidth-banner'        => 'Aktiver fullbredde banner?',
            'text-color'              => 'Text Color',
            'dashboard-login'         => 'Vis dashboardknappen i bunnteksten?',
            'reds'                    => 'Rød (brukes for feil)',
            'blues'                   => 'Blå (brukes for informasjon)',
            'greens'                  => 'Grønn (brukes for suksess)',
            'yellows'                 => 'Gul (brukes for varsler)',
            'oranges'                 => 'Orange (brukes til merknader)',
            'metrics'                 => 'Beregninger fyll',
            'links'                   => 'Lenker',
        ],
    ],

    'user' => [
        'username'       => 'Brukernavn',
        'email'          => 'E-post',
        'password'       => 'Passord',
        'api-token'      => 'API-Token',
        'api-token-help' => 'Regenerering av din API token vil hindre eksisterende programmer fra tilgang til Cachet.',
        'gravatar'       => 'Endre profilbilde på Gravatar.',
        'user_level'     => 'Brukernivå',
        'levels'         => [
            'admin' => 'Admin',
            'user'  => 'Bruker',
        ],
        '2fa' => [
            'help' => 'Aktivering av to-faktor autentisering øker sikkerheten til kontoen din. Du må laste ned <a href="https://support.google.com/accounts/answer/1066447?hl=en"> Google Authenticator</a> eller en lignende app på den mobile enheten. Når du logger inn vil du bli bedt om å gi et token som er generert av programmet.',
        ],
        'team' => [
            'description' => 'Inviter gruppemedlemmene ved å skrive inn e-postadressene deres her.',
            'email'       => 'E-post #:id',
        ],
    ],

    // Buttons
    'add'    => 'Legg til',
    'save'   => 'Lagre',
    'update' => 'Oppdater',
    'create' => 'Opprett',
    'edit'   => 'Rediger',
    'delete' => 'Slett',
    'submit' => 'Send',
    'cancel' => 'Avbryt',
    'remove' => 'Fjern',
    'invite' => 'Inviter',
    'signup' => 'Registerer deg',

    // Other
    'optional' => '* Valgfritt',
];