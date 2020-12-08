# 『WEB+DB PRESS Vol.117』「PSRを知り効率的に開発をする」ソースコード集

このリポジトリでは『[WEB+DB PRESS Vol.117](https://gihyo.jp/magazine/wdpress/archive/2020/vol117)』に掲載された記事「PSRを知り効率的に開発をする」に登場するソースコードを公開しています。

また Docker Compose がインストールされている環境ではそのまま動作を確認することができます。
併せて活用してください。

## ソースコードへのリンク

* [「オートローディングに関する仕様を規定するPSR-4」のソースコード](./examples/autoloading)
* [「コーディングスタイルを規定するPSR-1、PSR-12」のソースコード（初期状態）](./examples/coding_style)
    * [PHPCBF によるソースコード自動修正（差分）](https://github.com/okashoi/web-db-press-psr-example/commit/a96bbfb85cbda759b5a04de6a81b153636f80df5)
    * [自動修正できないコーディングスタイル違反の修正例（差分）](https://github.com/okashoi/web-db-press-psr-example/commit/f077948d54bbad88ec98adc2c5b592038bcb5a94)
* [「インタフェースを規定するPSR」のソースコード（初期状態）](./examples/interface)
    * [ロガーを Monolog\Logger に置き換え（差分）](https://github.com/okashoi/web-db-press-psr-example/commit/636625a6777c7972dc11d9b1f7cef0db4fe42338)

## （付録）Docker Compose で動作させる手順

リポジトリ全体のディレクトリ構造は以下のとおりです。

```
/
├── _dockerfiles/     # Dockerfile 置き場
├── examples/
│   ├── autoloading/  # 「オートローディングに関する仕様を規定するPSR-4」のソースコード
│   ├── coding_style/ # 「コーディングスタイルを規定するPSR-1、PSR-12」のソースコード
│   └── interface/    # 「インタフェースを規定するPSR」のソースコード
├── docker-compose.yml
:
```

各節ごとにそれぞれ、以下に示すコマンドを実行することで bash が起動した状態になります。
その状態から、記事中のコマンドを実行して追体験できます。

```bash
# オートローディングに関する仕様を規定するPSR-4
docker-compose run --rm autoloading
```

```bash
# コーディングスタイルを規定するPSR-1、PSR-12
docker-compose run --rm coding_style
```

```bash
# インタフェースを規定するPSR
docker-compose run --rm interface
```

なお PHP と Composer さえインストールされていれば、ソースコードのあるディレクトリに移動して直接実行することもできます。
