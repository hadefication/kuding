class Kuding {

    setPublicPath(mix) {
        mix.setPublicPath('public/assets/kuding');
        return mix;
    }

    assetsPath(path) {
        return 'resources/assets/vendor/kuding/' + path;
    }

    publicAssetsPath(path) {
        return 'public/assets/kuding/' + path;
    }
}

let kuding = new Kuding();

module.exports = kuding;
