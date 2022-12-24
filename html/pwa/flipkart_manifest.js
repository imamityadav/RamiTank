  window.navigator.cookieEnabled && "serviceWorker" in navigator && window.addEventListener("load", (function() {
    var forceReload, isDLFKHostName = "dl.flipkart.com" === window.location.hostname;
    if (isDLFKHostName || -1 === navigator.userAgent.indexOf("Mobile")) forceReload = isDLFKHostName, navigator.serviceWorker.getRegistration().then((function(registration) {
      var serviceWorkerUnregistered = !1;
      registration && (registration.unregister(), serviceWorkerUnregistered = !0), (serviceWorkerUnregistered || forceReload) && window.location.reload()
    }));
    else try {
      navigator.serviceWorker.register("/sw.js?k=6d70c4069cb9c9d66b04ba6b4095e8b2").then((function(registration) {
        if (console.log("ServiceWorker registration successful with scope: ", registration.scope), registration.active) {
          const serviceWorker = registration.active,
            prefetchChunksData = {
              prefetchUrls: window.prefetch_asset_urls || [],
              type: "PREFETCH_ASSETS"
            };
          try {
            serviceWorker.postMessage(JSON.stringify(prefetchChunksData)), console.log("ServiceWorker is active and sending message : ", registration.scope)
          } catch (err) {
            console.log("Service Worker Error: " + err.toString())
          }
        }
      })).catch((function(err) {
        window.reportToSentry(err), console.error("ServiceWorker registration failed: ", err)
      })), navigator.serviceWorker.ready.then((function(swRegistration) {
        return window.heartBeatPushFailed = !0, swRegistration.sync && swRegistration.sync.register("heart-beat-for-push").then((function() {
          window.heartBeatPushFailed = !1, console.log("Sync registration successfull for web push Heart beat")
        }), (function(err) {
          console.log("Sync registration failed for web push Heart beat: " + err)
        }))
      })).catch((function(err) {
        console.log("Sync registration failed for web push Heart beat: " + err)
      }))
    } catch (err) {
      window.reportToSentry(err), console.error("ServiceWorker setup failed: ", err)
    }
  })) 
