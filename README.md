# Parsedown Bundle

[![Code Climate](https://codeclimate.com/github/dothiv/DothivParsedownBundle/badges/gpa.svg)](https://codeclimate.com/github/dothiv/DothivParsedownBundle) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dothiv/DothivParsedownBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dothiv/DothivParsedownBundle/?branch=master)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/0c763771-b393-4017-8b88-72a27c3b2d2b/big.png)](https://insight.sensiolabs.com/projects/0c763771-b393-4017-8b88-72a27c3b2d2b)

dotHIV parsedown bundle for Symfony2 install Parsedown and provides a twig filter

## Install

    composer require dothiv/dothiv-parsedown-bundle dev-master

Add

    new Dothiv\Bundle\ParsedownBundle\DothivParsedownBundle(),

to your `AppKernel.php`.

## Usage

In twig templates:

    {{ var|markdown }}


