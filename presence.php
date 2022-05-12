<div class="presence">
	<div class="row map_set">
		<div class="col-4 offset-3">
			<div class="sidebar">
				<div id="listings" class="listings"></div>
			</div>
		</div>
		<div class="col-8 offset-3">
			<div id="map-container">
				<div id="map">
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZGVlcHRoaWthcyIsImEiOiJjbDBhaGh5YmUwOGtnM2JtaHY2ajU3bjB5In0.Ip7o9BeAzw0aRVrVP9SOkA';
	
	      /**
	       * Add the map to the page
	       */
	      const map = new mapboxgl.Map({
	        container: 'map',
	        style: 'mapbox://styles/mapbox/light-v10',
	        center: [80.77456440811677, 6.956821295552013],
	        zoom: 7,
	        scrollZoom: true
	      });
	
	      const stores = {
	        'type': 'FeatureCollection',
	        'features': [
	          {
	           
	
	
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [79.86055, 6.92063]
	},
	'properties': {
	
	'address': 'Plantation State 1',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	
	}
	},
	{
		'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [79.87542809046876, 6.895589634341636]
	},
	'properties': {
	'address': 'Plantation State 2',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
		
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [79.85005772537455, 6.933924203840816]
	},
	'properties': {
	'address': 'Plantation State 2',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [80.63625192472523, 7.306122303036927]
	},
	'properties': {
	'address': 'Plantation State 3',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [80.01402889459825, 7.073074022494866]
	},
	'properties': {
	'address': 'Plantation State 4',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [79.846855139737, 6.92296271014464]
	},
	'properties': {
	'address': 'Plantation State 5',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [81.33060287600406, 6.413541270965514]
	},
	'properties': {
	'address': 'Plantation State 6',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [79.92184967030403, 7.197365941921254]
	},
	'properties': {
	'address': 'Plantation State 7',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	'type': 'Feature',
	'geometry': {
	'type': 'Point',
	'coordinates': [80.55658361741216, 6.002526615903571]
	},
	'properties': {
	'address': 'Plantation State 8',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	}
	},
	{
	
	
	            'type': 'Feature',
	            'geometry': {
	              'type': 'Point',
	              'coordinates': [79.851125216336, 6.923963866717319]
	            },
	            'properties': {
	'address': 'Plantation State 9',
	
	'city': '<b>Level 09, Aitken Spence Tower I, Colombo 02, Sri lanka.<br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com | <i class="fa-solid fa-phone"> </i> +94 11 469 30 00<br>Total Area Description<br><b>Tea Crop:</b> Description<br> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"> <img src="images/about/location1.jpg" width="130px" height="" style="vertical-align:bottom"><br><div class="row"><div class="col-3"><img src="images/about/manager.png" width="80px" height="" style="vertical-align:bottom"></div><div class="col-9 align-middle">Manader Name <br>Designation <br><br><i class="fa-solid fa-envelope"> </i> info@elpitiya.com <br> <i class="fa-solid fa-phone"> </i> +94 11 469 30 00</div></div>'
	
	            }
	          }
	        ]
	      };
	
	      /**
	       * Assign a unique id to each store. You'll use this `id`
	       * later to associate each point on the map with a listing
	       * in the sidebar.
	       */
	      stores.features.forEach((store, i) => {
	        store.properties.id = i;
	      });
	
	      /**
	       * Wait until the map loads to make changes to the map.
	       */
	      map.on('load', () => {
	        /**
	         * This is where your '.addLayer()' used to be, instead
	         * add only the source without styling a layer
	         */
	        map.addSource('places', {
	          'type': 'geojson',
	          'data': stores
	        });
	
	        /**
	         * Add all the things to the page:
	         * - The location listings on the side of the page
	         * - The markers onto the map
	         */
	        buildLocationList(stores);
	        addMarkers();
	      });
	
	      /**
	       * Add a marker to the map for every store listing.
	       **/
	      function addMarkers() {
	        /* For each feature in the GeoJSON object above: */
	        for (const marker of stores.features) {
	          /* Create a div element for the marker. */
	          const el = document.createElement('div');
	          /* Assign a unique `id` to the marker. */
	          el.id = `marker-${marker.properties.id}`;
	          /* Assign the `marker` class to each marker for styling. */
	          el.className = 'marker';
	
	          /**
	           * Create a marker using the div element
	           * defined above and add it to the map.
	           **/
	          new mapboxgl.Marker(el, { offset: [0, -23] })
	            .setLngLat(marker.geometry.coordinates)
	            .addTo(map);
	
	          /**
	           * Listen to the element and when it is clicked, do three things:
	           * 1. Fly to the point
	           * 2. Close all other popups and display popup for clicked store
	           * 3. Highlight listing in sidebar (and remove highlight for all other listings)
	           **/
	          el.addEventListener('click', (e) => {
	            /* Fly to the point */
	            flyToStore(marker);
	            /* Close all other popups and display popup for clicked store */
	            createPopUp(marker);
	            /* Highlight listing in sidebar */
	            const activeItem = document.getElementsByClassName('active');
	            e.stopPropagation();
	            if (activeItem[0]) {
	              activeItem[0].classList.remove('active');
	            }
	            const listing = document.getElementById(
	              `listing-${marker.properties.id}`
	            );
	            listing.classList.add('active');
	          });
	        }
	      }
	
	      /**
	       * Add a listing for each store to the sidebar.
	       **/
	      function buildLocationList(stores) {
	        for (const store of stores.features) {
	          /* Add a new listing section to the sidebar. */
	          const listings = document.getElementById('listings');
	          const listing = listings.appendChild(document.createElement('div'));
	          /* Assign a unique `id` to the listing. */
	          listing.id = `listing-${store.properties.id}`;
	          /* Assign the `item` class to each listing for styling. */
	          listing.className = 'item';
	
	          /* Add the link to the individual listing created above. */
	          const link = listing.appendChild(document.createElement('a'));
	          link.href = '#/';
	          link.className = 'title';
	          link.id = `link-${store.properties.id}`;
	          link.innerHTML = `${store.properties.address}`;
	
	          /* Add details to the individual listing. */
	          const details = listing.appendChild(document.createElement('div'));
	          details.innerHTML = `${store.properties.city}`;
	          if (store.properties.phone) {
	            details.innerHTML += ` &middot; ${store.properties.phoneFormatted}`;
	          }
	
	          /**
	           * Listen to the element and when it is clicked, do four things:
	           * 1. Update the `currentFeature` to the store associated with the clicked link
	           * 2. Fly to the point
	           * 3. Close all other popups and display popup for clicked store
	           * 4. Highlight listing in sidebar (and remove highlight for all other listings)
	           **/
	          link.addEventListener('click', function () {
	            for (const feature of stores.features) {
	              if (this.id === `link-${feature.properties.id}`) {
	                flyToStore(feature);
	                createPopUp(feature);
	              }
	            }
	            const activeItem = document.getElementsByClassName('active');
	            if (activeItem[0]) {
	              activeItem[0].classList.remove('active');
	            }
	            this.parentNode.classList.add('active');
	          });
	        }
	      }
	
	      /**
	       * Use Mapbox GL JS's `flyTo` to move the camera smoothly
	       * a given center point.
	       **/
	      function flyToStore(currentFeature) {
	        map.flyTo({
	          center: currentFeature.geometry.coordinates,
	          zoom: 13
	        });
	      }
	
	      /**
	       * Create a Mapbox GL JS `Popup`.
	       **/
	
		  
		        function createPopUp(currentFeature) {
	        const popUps = document.getElementsByClassName('mapboxgl-popup');
	        if (popUps[0]) popUps[0].remove();
	        const popup = new mapboxgl.Popup({ closeOnClick: false })
	          .setLngLat(currentFeature.geometry.coordinates)
	          .setHTML(
	            `<h4>${currentFeature.properties.address}</h4><h4>${currentFeature.properties.city}</h4>`
				
	          )
	          .addTo(map);
	      }
</script>
<script>
	$('a.listings').click(function(e)
	{
	    // Special stuff to do when this link is clicked...
	
	    // Cancel the default action
	    e.preventDefault();
	});
</script>
<script>
	map.on('load', function () {
	    map.resize();
	});
</script>