<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Example Component</div>
          <Renderer alpha antialias orbit-ctrl pointer shadow resize="window" ref="renderer">
            <Camera :position="{  x: 0,y: 15, z: 15}" :look-at="{ x: 0, y: 100, z: 0 }" />
            <Scene>
             <PointLight :position="{ x:100, y: 100, z: 100 }" />
             <PointLight :position="{ x:-100, y: 100, z: 100}" />
             <PointLight :position="{ x:100, y: 100, z: -100 }" />

             <Box :position="{ x: 3, y: 0.5, z: -0.6 }" :width="6" :height="1" :depth="1.2">
                 <BasicMaterial color="#28690b" />
             </Box>
             <Box :position="{ x: 0.5, y: 1, z: -1.8 }" :width="1" :height="2" :depth="1">
                 <LambertMaterial color="#b90303" />
             </Box>

             <Box :position="{ x: 8.1, y: 0.5, z: -0.6 }" :width="4" :height="1" :depth="1.2">
                 <BasicMaterial color="#041cee" />
             </Box>
            
              <Box :position="{ x: 3.5, y: 0.5, z: -1.8 }" :width="5" :height="1" :depth="1.2">
                 <LambertMaterial color="#4b38b3" />
              </Box>

              <GltfModel ref="gltfModel" src="/models3D/truck.glb" @load="onReady" />   

            </Scene>
          </Renderer>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { RGBELoader } from 'three/examples/jsm/loaders/RGBELoader.js'
import { PMREMGenerator } from 'three/src/extras/PMREMGenerator.js';
import * as THREE from 'three';
import { GltfModel, Plane, Box, Camera, Material, BasicMaterial, LambertMaterial,  PointLight, Renderer, Scene } from 'troisjs';
export default {
  components: { GltfModel, Plane, Box, Camera, Material, BasicMaterial, LambertMaterial,  PointLight, Renderer, Scene },

  data() {
        return {}
  },
  methods: {
          onReady() {
            console.log('start')
          },
          loadEnviromentHdr(renderer, hdrFile) {
            const pmremGenerator = new PMREMGenerator(renderer.renderer)
            const hdriLoader = new RGBELoader();
            hdriLoader.load(hdrFile, (texture) => {
            const envMap = pmremGenerator.fromEquirectangular(texture).texture;
            texture.dispose();
            renderer.scene.environment = envMap;
          });
    },
  },
  mounted() {
    const renderer = this.$refs.renderer;
    this.loadEnviromentHdr(renderer, '/models3D/photo_studio.hdr');
    renderer.renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.renderer.toneMappingExposure = 1.5;
  }
};
</script>
