<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'privacy',
    'title'       => 'Privacy Policy — Meccora',
    'description' => 'How Meccora collects, uses, stores and protects information processed through the platform for participating auto repair shops, including SMS consent records and data retention.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = ['title' => 'Privacy Policy', 'crumb' => 'Privacy Policy'];
$legal = [
  'effective' => 'July 8, 2026',
  'intro'     => 'This Privacy Policy explains how Meccora collects, uses, stores and protects information processed through the platform.',
  'sections'  => [
    ['h' => '1. Introduction', 'p' => [
      'Meccora is a multi-tenant software-as-a-service platform designed for independent automotive repair businesses. Each participating repair shop maintains its own customer records, appointments, vehicles, repair orders and communication history within an isolated tenant. The platform provides tools for operational communication only and is not intended for advertising campaigns or mass marketing. Throughout this policy, "Platform" refers to Meccora, "Shop" refers to the subscribing business, and "Customer" refers to the vehicle owner whose information has been entered by a participating Shop.',
    ]],
    ['h' => '2. Scope', 'p' => [
      'This Privacy Policy applies to the website, the web application, APIs, SMS messaging features, support services and related infrastructure used to provide Meccora. It explains what information is collected, why it is collected, how it is protected and the responsibilities shared between the Platform and participating Shops.',
    ]],
    ['h' => '3. Information We Collect', 'p' => [
      'Information may include customer names, phone numbers, email addresses, vehicle details, licence plate numbers, VIN, service history, appointment dates, invoices, repair status, internal notes, employee identifiers, account credentials, IP addresses, audit logs and consent records. Consent records include the consent method, date, time and employee who recorded the consent.',
    ]],
    ['h' => '4. Purpose of Collection', 'p' => [
      'Information is collected solely to operate the service, schedule appointments, manage repair orders, communicate service updates, improve reliability, maintain security, troubleshoot technical issues, comply with legal obligations and demonstrate messaging compliance. The Platform does not use customer information for unrelated advertising.',
    ]],
    ['h' => '5. SMS Messaging', 'p' => [
      'SMS messages are transactional. Examples include appointment reminders, maintenance reminders, repair status updates and vehicle pickup notifications. Marketing messages, promotional offers, coupons and unrelated advertising are not sent through this messaging program. Message frequency depends on the customer\'s service activity. Standard carrier message and data rates may apply. Customers may reply STOP to opt out or HELP for assistance.',
    ]],
    ['h' => '6. Consent Responsibilities', 'p' => [
      'Each Shop is responsible for obtaining valid customer consent before SMS messages are sent. Consent may be collected verbally during an in-person visit or telephone call, or through another lawful method accepted by applicable regulations. Employees must accurately record the consent method, timestamp and employee identifier in Meccora before transactional messages are sent. The Platform stores these records to support compliance and auditing.',
    ]],
    ['h' => '7. Multi-Tenant Data Model', 'p' => [
      'Each Shop can access only its own records. Logical separation and access controls are used to prevent one tenant from viewing another tenant\'s information. Administrative personnel access customer data only when necessary for technical support, security investigations or legal compliance.',
    ]],
    ['h' => '8. Sharing Information', 'p' => [
      'Information may be shared with infrastructure providers including cloud hosting, backup, email and SMS providers such as Twilio only to the extent necessary to deliver the requested services. We do not sell, rent or disclose customer phone numbers to third parties for marketing purposes.',
    ]],
    ['h' => '9. Security', 'p' => [
      'Reasonable administrative, physical and technical safeguards are used, including authentication, role-based access controls, encrypted connections, system monitoring, audit logging and regular software updates. Although no system can guarantee absolute security, commercially reasonable measures are maintained to protect personal information.',
    ]],
    ['h' => '10. Retention', 'p' => [
      'Records are retained only as long as necessary to provide the service, comply with contractual and legal obligations, resolve disputes, maintain accounting records and demonstrate messaging compliance. When retention is no longer required, information is securely deleted or anonymized where practical.',
    ]],
    ['h' => '11. Your Rights', 'p' => [
      'Customers should normally contact the repair shop that collected their information to request access, correction or deletion because each Shop controls its own customer relationship. The Platform will reasonably assist participating Shops in responding to lawful privacy requests.',
    ]],
    ['h' => '12. International Compliance', 'p' => [
      'Meccora is designed for business users and seeks to operate in a manner consistent with applicable privacy legislation including PIPEDA in Canada. Where applicable, certain concepts from GDPR or similar laws may also be followed when reasonably appropriate.',
    ]],
    ['h' => '13. Changes', 'p' => [
      'This policy may be revised periodically. The effective date at the top of this page will be updated when material changes are made. Continued use of the Platform after revisions constitutes acceptance of the updated policy to the extent permitted by law.',
    ]],
  ],
];
require __DIR__ . '/partials/legal.php';
