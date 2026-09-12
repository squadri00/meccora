/*
 * Kill-switch service worker.
 * The old Mobirise site registered a service worker at this same path (/sw.js).
 * Returning visitors' browsers will fetch THIS file on their next visit, install
 * it, and it immediately unregisters itself and wipes the old caches — so nobody
 * gets served a stale copy of the old site. Safe to delete after a few months.
 */
self.addEventListener('install', (e) => self.skipWaiting());

self.addEventListener('activate', (e) => {
  e.waitUntil((async () => {
    const keys = await caches.keys();
    await Promise.all(keys.map((k) => caches.delete(k)));
    await self.registration.unregister();
    const clientsList = await self.clients.matchAll({ type: 'window' });
    clientsList.forEach((client) => client.navigate(client.url));
  })());
});
