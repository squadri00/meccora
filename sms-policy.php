<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'sms-policy',
    'title'       => 'SMS Messaging Policy — Meccora',
    'description' => 'How Meccora sends transactional SMS for auto repair shops — permitted message types, consent requirements, STOP and HELP opt-out, message frequency and carrier charges.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = ['title' => 'SMS Messaging Policy', 'crumb' => 'SMS Policy'];
$legal = [
  'effective' => 'July 8, 2026',
  'intro'     => 'This SMS Messaging Policy explains how Meccora delivers text messages on behalf of participating independent automotive repair shops. It forms part of the Platform\'s Terms and Conditions and Privacy Policy.',
  'sections'  => [
    ['h' => '1. Purpose', 'p' => ['Meccora uses a single Twilio-enabled phone number to deliver transactional SMS messages for subscribing repair shops. The messaging program exists solely to support vehicle service operations and improve customer communication. The platform is not designed for advertising campaigns, mass texting or promotional marketing.']],
    ['h' => '2. Types of Messages', 'p' => ['The Platform may send appointment reminders, maintenance reminders, repair status updates, diagnostic approvals, parts availability notifications, vehicle pickup notifications, payment-ready notices and similar operational messages directly related to an existing customer relationship.']],
    ['h' => '3. Messages We Do Not Send', 'p' => ['The Platform does not permit promotional offers, coupons, newsletters, contests, affiliate marketing, political messages, fundraising, lead generation, third-party advertising or any unrelated commercial content through the SMS program.']],
    ['h' => '4. Consent Requirements', 'p' => ['Before any SMS message is sent, the participating repair shop must obtain the customer\'s consent through a lawful method such as an in-person conversation, telephone call or another permitted method. The employee records the consent method, the date and time consent was obtained and the employee identifier inside Meccora. Shops are responsible for ensuring the accuracy of these records.']],
    ['h' => '5. Opt-Out', 'p' => ['Customers may stop receiving messages at any time by replying STOP. Once processed, no further SMS messages will be sent unless the customer provides new consent or requests that messaging resume. Alternative opt-out requests received directly by the repair shop should also be honoured promptly.']],
    ['h' => '6. Help', 'p' => ['Customers may reply HELP to receive assistance. They may also contact the repair shop directly using the contact information provided during their service appointment.']],
    ['h' => '7. Message Frequency', 'p' => ['Message frequency varies based on the customer\'s appointments and repair activity. Some customers may receive only one or two messages during a repair visit, while others may receive additional operational updates if requested.']],
    ['h' => '8. Charges', 'p' => ['Standard message and data rates may apply according to the customer\'s mobile carrier and service plan. Meccora does not charge customers separately for receiving SMS messages.']],
    ['h' => '9. Data Handling', 'p' => ['Phone numbers and messaging records are used only to provide the requested automotive service notifications. Customer phone numbers are not sold, rented or shared with third parties for marketing purposes. Message records may be retained to support customer service, legal obligations and messaging compliance.']],
    ['h' => '10. Subscriber Responsibilities', 'p' => ['Every repair shop using the Platform must obtain appropriate customer consent, maintain accurate records, send only authorized transactional messages and comply with applicable laws, carrier rules and Twilio A2P Messaging requirements. Failure to comply may result in suspension of messaging privileges or account termination.']],
    ['h' => '11. Abuse Prevention', 'p' => ['Meccora monitors the messaging program for spam, fraud, excessive complaints, unusual traffic patterns and other indicators of abuse. Accounts that violate this policy may be investigated, restricted or permanently disabled.']],
    ['h' => '12. Policy Updates', 'p' => ['This policy may be updated as messaging regulations, carrier requirements or Platform functionality change. The latest version will always be available on this page.']],
  ],
];
require __DIR__ . '/partials/legal.php';
