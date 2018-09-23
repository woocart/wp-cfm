<?php

namespace Niteo\WooCart\Defaults\Generators {

	/**
	 * Class Generator
	 *
	 * @package Niteo\WooCart\Defaults\Generators
	 */
	abstract class Generator {


		const emojis = [
			'1f642',
			'1f60f',
			'1f60e',
			'1f615',
			'1f61b',
			'1f606',
			'1f605',
			'1f910',
			'1f620',
			'1f609',
			'1f614',
			'1f637',
			'1f629',
			'1f61c',
			'2639',
			'1f60b',
			'1f608',
			'1f607',
			'1f604',
			'1f624',
			'1f61e',
			'1f60d',
			'1f600',
			'1f630',
			'1f917',
			'1f626',
			'1f61d',
			'1f62e',
			'1f612',
			'1f623',
			'1f633',
			'1f617',
			'1f60c',
			'1f62c',
			'1f61a',
			'1f62f',
			'1f627',
			'1f62d',
			'1f641',
			'1f62a',
			'1f616',
			'1f913',
			'1f915',
			'1f613',
			'1f618',
			'1f621',
			'1f644',
			'1f628',
			'1f603',
			'1f643',
			'1f631',
			'1f911',
			'1f611',
			'1f619',
			'1f61f',
			'1f914',
			'1f601',
			'1f632',
			'1f634',
			'263a',
			'1f60a',
			'1f912',
			'1f636',
			'1f62b',
			'1f625',
			'1f610',
			'1f622',
			'1f602',
			'1f635',
			'1f435',
			'1f413',
			'1f40d',
			'1f40a',
			'1f43d',
			'1f432',
			'1f429',
			'1f404',
			'1f40f',
			'1f421',
			'1f42d',
			'1f414',
			'1f41f',
			'1f412',
			'1f40e',
			'1f42c',
			'1f422',
			'1f418',
			'1f981',
			'1f411',
			'1f43b',
			'1f42a',
			'1f424',
			'1f980',
			'1f434',
			'1f431',
			'1f41d',
			'1f437',
			'1f410',
			'1f38f',
			'1f43f',
			'1f40b',
			'1f41e',
			'1f403',
			'1f43e',
			'1f438',
			'1f43c',
			'1f423',
			'1f416',
			'1f430',
			'1f417',
			'1f43a',
			'1f415',
			'1f982',
			'1f41c',
			'1f983',
			'1f426',
			'1f405',
			'1f406',
			'1f984',
			'1f425',
			'1f40c',
			'1f42b',
			'1f427',
			'1f42f',
			'1f402',
			'1f439',
			'1f401',
			'1f42e',
			'1f408',
			'1f428',
			'1f409',
			'1f41a',
			'1f420',
			'1f419',
			'1f407',
			'1f400',
			'1f436',
			'1f433',
			'1f41b',
			'1f47d',
			'1f486-1f3fb',
			'1f481-1f3fd',
			'1f64b-1f3fe',
			'1f478',
			'1f471-1f3fe',
			'1f64a',
			'1f482-1f3ff',
			'1f575-1f3ff',
			'1f64b-1f3fd',
			'1f63a',
			'1f47c-1f3fd',
			'1f479',
			'1f470-1f3fb',
			'1f467-1f3fb',
			'1f470',
			'1f385-1f3fb',
			'1f478-1f3fb',
			'1f64d',
			'1f471-1f3fc',
			'1f385-1f3fc',
			'1f487-1f3fc',
			'1f487-1f3fb',
			'1f646-1f3ff',
			'1f486-1f3fe',
			'1f46e',
			'1f472',
			'1f477-1f3fc',
			'1f648',
			'1f472-1f3fc',
			'1f64b-1f3ff',
			'1f477-1f3fe',
			'1f466-1f3fb',
			'1f477-1f3fd',
			'1f476',
			'1f645-1f3fd',
			'1f473-1f3ff',
			'1f476-1f3fe',
			'1f64e-1f3fd',
			'1f639',
			'1f476-1f3fc',
			'1f575',
			'1f647-1f3ff',
			'1f469',
			'1f646-1f3fe',
			'1f64b-1f3fc',
			'1f647-1f3fc',
			'1f473-1f3fe',
			'1f470-1f3fc',
			'1f46e-1f3fc',
			'1f478-1f3fd',
			'1f575-1f3fe',
			'1f63b',
			'1f487-1f3fe',
			'1f645',
			'1f467-1f3ff',
			'1f468-1f3fe',
			'1f477',
			'1f471-1f3ff',
			'1f469-1f3fb',
			'1f477-1f3ff',
			'1f486-1f3ff',
			'1f475-1f3fb',
			'1f64d-1f3ff',
			'1f474-1f3ff',
			'1f64b-1f3fb',
			'1f467-1f3fe',
			'1f47f',
			'1f647-1f3fd',
			'1f482-1f3fe',
			'1f486-1f3fc',
			'1f646-1f3fc',
			'1f466-1f3fd',
			'1f385-1f3fd',
			'1f575-1f3fc',
			'1f476-1f3ff',
			'1f474-1f3fc',
			'1f916',
			'1f646-1f3fd',
			'1f47c-1f3fb',
			'1f640',
			'1f486-1f3fd',
			'1f466',
			'1f46e-1f3fe',
			'1f478-1f3fc',
			'1f575-1f3fb',
			'1f477-1f3fb',
			'1f473-1f3fb',
			'1f649',
			'1f475-1f3ff',
			'1f481-1f3fe',
			'1f487-1f3fd',
			'1f471-1f3fd',
			'1f469-1f3fd',
			'1f470-1f3ff',
			'1f481',
			'1f472-1f3fe',
			'1f647-1f3fb',
			'1f47c',
			'1f468-1f3fb',
			'1f468-1f3fd',
			'1f64e',
			'1f470-1f3fd',
			'1f475-1f3fe',
			'1f64b',
			'1f645-1f3fb',
			'1f482-1f3fb',
			'1f473',
			'1f466-1f3fe',
			'1f4a9',
			'1f469-1f3fc',
			'1f64d-1f3fb',
			'1f468-1f3fc',
			'1f471-1f3fb',
			'1f482',
			'1f473-1f3fd',
			'1f47c-1f3fc',
			'1f575-1f3fd',
			'1f385-1f3fe',
			'1f466-1f3fc',
			'1f47e',
			'1f64e-1f3fe',
			'1f385-1f3ff',
			'1f474',
			'1f47c-1f3ff',
			'1f63f',
			'1f473-1f3fc',
			'1f63d',
			'1f476-1f3fb',
			'1f64d-1f3fd',
			'1f46e-1f3fb',
			'1f63c',
			'1f64d-1f3fc',
			'1f647',
			'1f482-1f3fd',
			'1f638',
			'1f647-1f3fe',
			'1f478-1f3fe',
			'1f46e-1f3ff',
			'1f63e',
			'1f645-1f3fe',
			'1f487-1f3ff',
			'1f467',
			'1f474-1f3fd',
			'1f468',
			'1f645-1f3fc',
			'1f481-1f3fb',
			'1f468-1f3ff',
			'1f646',
			'1f475',
			'1f47a',
			'1f475-1f3fd',
			'1f487',
			'1f472-1f3fb',
			'1f470-1f3fe',
			'1f474-1f3fe',
			'1f478-1f3ff',
			'1f46e-1f3fd',
			'1f481-1f3fc',
			'1f471',
			'1f64e-1f3fc',
			'1f467-1f3fd',
			'1f47b',
			'1f474-1f3fb',
			'1f472-1f3fd',
			'1f472-1f3ff',
			'1f480',
			'1f385',
			'1f47c-1f3fe',
			'1f466-1f3ff',
			'1f476-1f3fd',
			'1f482-1f3fc',
			'1f467-1f3fc',
			'1f469-1f3fe',
			'1f481-1f3ff',
			'1f646-1f3fb',
			'1f486',
			'1f64e-1f3ff',
			'1f645-1f3ff',
			'1f469-1f3ff',
			'1f64d-1f3fe',
			'1f64e-1f3fb',
			'1f475-1f3fc',
			'1f44d',
			'270a-1f3fe',
			'1f918-1f3fe',
			'270c-1f3fe',
			'1f595-1f3ff',
			'1f64f-1f3fc',
			'1f442-1f3fc',
			'1f596-1f3ff',
			'1f443',
			'270c-1f3fc',
			'1f445',
			'1f442-1f3fd',
			'1f448-1f3fe',
			'1f595',
			'270a-1f3fc',
			'261d-1f3fd',
			'1f590-1f3fc',
			'1f595-1f3fe',
			'1f44a-1f3fe',
			'1f595-1f3fb',
			'270d-1f3fe',
			'1f64c-1f3fe',
			'1f44c-1f3ff',
			'270d',
			'1f449-1f3ff',
			'1f448-1f3fb',
			'1f918-1f3fb',
			'270c',
			'1f4aa-1f3ff',
			'1f64f-1f3ff',
			'270a-1f3fd',
			'1f64c-1f3ff',
			'270a',
			'1f44f-1f3fc',
			'270b-1f3fc',
			'1f446-1f3fd',
			'1f44e-1f3fe',
			'1f44c-1f3fe',
			'1f450-1f3ff',
			'1f450-1f3fd',
			'1f448-1f3ff',
			'270b-1f3fd',
			'1f44c-1f3fd',
			'270d-1f3fc',
			'1f44a-1f3ff',
			'1f64f-1f3fe',
			'1f64c-1f3fb',
			'1f64c-1f3fc',
			'1f44b-1f3fb',
			'1f4aa-1f3fc',
			'1f64f-1f3fb',
			'1f448-1f3fd',
			'1f64c-1f3fd',
			'1f44e-1f3fd',
			'1f446-1f3fe',
			'1f590-1f3ff',
			'270d-1f3fd',
			'1f447-1f3ff',
			'1f918-1f3ff',
			'1f44f-1f3fd',
			'1f442-1f3fe',
			'1f442-1f3fb',
			'1f449-1f3fb',
			'1f4aa-1f3fe',
			'1f443-1f3fd',
			'1f449-1f3fc',
			'261d-1f3fb',
			'1f449',
			'1f443-1f3fc',
			'1f4aa',
			'1f596-1f3fc',
			'1f450-1f3fb',
			'1f44d-1f3fb',
			'1f447',
			'1f596-1f3fd',
			'270b',
			'1f64c',
			'1f44b',
			'1f44f-1f3ff',
			'270a-1f3fb',
			'1f918-1f3fc',
			'1f918-1f3fd',
			'1f64f-1f3fd',
			'1f44d-1f3fc',
			'1f446-1f3fb',
			'1f590',
			'1f447-1f3fb',
			'1f64f',
			'1f4aa-1f3fb',
			'1f443-1f3ff',
			'1f44a',
			'1f448-1f3fc',
			'1f44f-1f3fe',
			'1f450-1f3fc',
			'1f590-1f3fd',
			'1f4aa-1f3fd',
			'261d',
			'1f443-1f3fe',
			'1f596',
			'1f44e',
			'1f44a-1f3fd',
			'1f443-1f3fb',
			'1f44e-1f3ff',
			'1f44b-1f3fd',
			'270a-1f3ff',
			'1f918',
			'1f44f-1f3fb',
			'1f596-1f3fb',
			'1f447-1f3fe',
			'1f44e-1f3fc',
			'270d-1f3ff',
			'270c-1f3ff',
			'270d-1f3fb',
			'270c-1f3fd',
			'1f447-1f3fc',
			'1f446',
			'1f442-1f3ff',
			'261d-1f3ff',
			'1f44f',
			'1f44a-1f3fc',
			'1f44e-1f3fb',
			'270c-1f3fb',
			'1f44a-1f3fb',
			'1f44b-1f3fc',
			'1f44b-1f3fe',
			'1f444',
			'1f447-1f3fd',
			'1f44b-1f3ff',
			'1f44d-1f3fd',
			'1f596-1f3fe',
			'1f44d-1f3ff',
			'1f449-1f3fd',
			'1f446-1f3fc',
			'1f446-1f3ff',
			'1f590-1f3fb',
			'270b-1f3fb',
			'1f595-1f3fc',
			'1f448',
			'261d-1f3fc',
			'1f590-1f3fe',
			'1f44d-1f3fe',
			'261d-1f3fe',
			'270b-1f3fe',
			'1f442',
			'1f44c-1f3fb',
			'1f44c',
			'1f450',
			'270b-1f3ff',
			'1f449-1f3fe',
			'1f450-1f3fe',
			'1f44c-1f3fc',
			'1f595-1f3fd',
			'1f46b',
			'1f468-1f469-1f466-1f466',
			'1f6b6-1f3fd',
			'1f574',
			'1f3c4-1f3ff',
			'1f3cd',
			'1f469-1f469-1f467-1f467',
			'1f6b4-1f3fb',
			'1f3c3-1f3fb',
			'26f9-1f3ff',
			'1f3c7-1f3fd',
			'1f6b5',
			'1f6a3',
			'1f6b5-1f3fc',
			'1f3cc',
			'26f9',
			'1f468-1f468-1f467',
			'1f3c4',
			'1f468-2764-1f468',
			'1f6a3-1f3fc',
			'1f3c4-1f3fe',
			'1f6b4-1f3fd',
			'1f3cb-1f3fc',
			'1f3c7-1f3fb',
			'1f3ca-1f3fe',
			'1f3c7-1f3fe',
			'1f6b6-1f3ff',
			'1f6b4-1f3fc',
			'1f6b6-1f3fb',
			'1f6b6-1f3fe',
			'1f469-2764-1f48b-1f469',
			'1f48f',
			'1f3c3-1f3fe',
			'1f3c7-1f3fc',
			'1f3ca-1f3ff',
			'1f3cb-1f3fe',
			'1f468-1f468-1f467-1f467',
			'1f483-1f3fd',
			'1f6b6-1f3fc',
			'26f9-1f3fb',
			'1f468-1f468-1f467-1f466',
			'1f6c0-1f3ff',
			'1f3ca-1f3fd',
			'1f6b6',
			'1f6b4-1f3ff',
			'1f469-1f469-1f466',
			'1f6a4',
			'26f9-1f3fc',
			'1f3c3-1f3fd',
			'1f6b4',
			'1f468-1f469-1f467',
			'1f3c4-1f3fd',
			'1f468-1f468-1f466',
			'1f46a',
			'1f38e',
			'1f6b5-1f3fb',
			'1f46d',
			'1f6b5-1f3fd',
			'1f3cb-1f3fb',
			'1f3cb',
			'1f6c0-1f3fe',
			'1f468-1f469-1f467-1f466',
			'1f6b4-1f3fe',
			'1f3ca-1f3fc',
			'1f6c0-1f3fb',
			'1f3c3-1f3ff',
			'1f483-1f3ff',
			'26f7',
			'1f6a3-1f3fd',
			'1f6c0-1f3fd',
			'1f3c3',
			'1f469-1f469-1f467',
			'1f6c0',
			'1f6a3-1f3ff',
			'1f3cb-1f3ff',
			'1f3c2',
			'26f9-1f3fd',
			'1f3cb-1f3fd',
			'1f468-1f468-1f466-1f466',
			'1f3ca',
			'1f6b5-1f3fe',
			'1f468-1f469-1f467-1f467',
			'1f483',
			'1f46f',
			'1f3c7-1f3ff',
			'1f483-1f3fb',
			'1f46c',
			'1f3ca-1f3fb',
			'1f468-2764-1f48b-1f468',
			'1f469-2764-1f469',
			'1f6a3-1f3fb',
			'1f483-1f3fe',
			'1f6b5-1f3ff',
			'1f3c3-1f3fc',
			'1f3c7',
			'1f469-1f469-1f466-1f466',
			'1f483-1f3fc',
			'1f3c4-1f3fb',
			'1f469-1f469-1f467-1f466',
			'1f6a3-1f3fe',
			'1f3c4-1f3fc',
			'1f6c0-1f3fc',
			'26f9-1f3fe',
			'1f370',
			'1f351',
			'1f35c',
			'1f348',
			'1f374',
			'1f371',
			'1f359',
			'1f365',
			'1f37c',
			'1f362',
			'1f35e',
			'1f36f',
			'1f364',
			'1f35a',
			'1f32e',
			'1f373',
			'1f36b',
			'1f372',
			'1f376',
			'1f344',
			'1f37d',
			'1f9c0',
			'1f360',
			'1f366',
			'1f37a',
			'1f369',
			'1f37f',
			'1f363',
			'1f37e',
			'1f368',
			'1f36c',
			'1f375',
			'1f36d',
			'1f361',
			'1f35b',
			'1f355',
			'1f347',
			'1f367',
			'1f32f',
			'1f345',
			'1f349',
			'1f346',
			'1f36a',
			'1f378',
			'2615',
			'1f354',
			'1f352',
			'1f35f',
			'1f36e',
			'1f353',
			'1f357',
			'1f32d',
			'1f377',
			'1f37b',
			'1f350',
			'1f379',
			'1f35d',
			'1f356',
			'1f358',
			'1f381',
			'1f497',
			'1f389',
			'1f3ad',
			'1f496',
			'1f3a2',
			'1f386',
			'2764',
			'1f494',
			'1f3a9',
			'1f387',
			'1f48d',
			'1f492',
			'1f49f',
			'1f384',
			'2603',
			'1f54e',
			'1f49e',
			'2665',
			'1f491',
			'1f49c',
			'1f5d2',
			'1f49a',
			'1f490',
			'1f49b',
			'1f498',
			'26c4',
			'1f3aa',
			'1f48e',
			'1f6cd',
			'1f49d',
			'1f5d3',
			'1f383',
			'1f38a',
			'1f388',
			'1f56f',
			'1f3a1',
			'1f3a0',
			'1f4c5',
			'1f495',
			'1f382',
			'1f499',
			'1f380',
			'1f4c6',
			'1f493',
			'1f38d',
			'1f333',
			'1f34a',
			'2618',
			'1f336',
			'1f337',
			'1f338',
			'1f342',
			'1f325',
			'26fa',
			'1f34f',
			'1f33d',
			'1f343',
			'1f340',
			'1f30a',
			'1f332',
			'1f3dd',
			'1f335',
			'1f3de',
			'1f3d5',
			'1f30c',
			'1f34d',
			'1f3d4',
			'1f34b',
			'1f324',
			'1f328',
			'1f331',
			'1f33a',
			'1f327',
			'1f577',
			'1f330',
			'1f339',
			'1f30b',
			'1f33c',
			'1f33e',
			'1f5fb',
			'1f334',
			'1f329',
			'1f326',
			'1f304',
			'1f3d6',
			'1f305',
			'26f0',
			'1f33f',
			'1f578',
			'1f341',
			'1f33b',
			'1f34e',
			'1f3dc',
			'1f34c',
			'26c5',
			'23f3',
			'1f314',
			'1f32a',
			'1f31a',
			'1f32c',
			'1f317',
			'1f318',
			'1f316',
			'1f30f',
			'1f31c',
			'2602',
			'1f321',
			'1f30d',
			'1f505',
			'231b',
			'26c8',
			'2614',
			'1f311',
			'1f315',
			'1f506',
			'1f31b',
			'1f31e',
			'1f312',
			'1f32b',
			'1f319',
			'1f31d',
			'1f302',
			'26f1',
			'1f313',
			'2601',
			'2600',
			'1f30e',
			'1f3be',
			'1f3c9',
			'1f3fa',
			'1f6a1',
			'1f3bf',
			'1f320',
			'1f3b1',
			'1f3b3',
			'1f3cf',
			'1f4ab',
			'1f3c8',
			'1f4e2',
			'1f3d3',
			'2b50',
			'1f3ce',
			'1f3f9',
			'1f531',
			'1f6a0',
			'1f4fb',
			'1f31f',
			'2694',
			'1f3f4',
			'1f396',
			'26bd',
			'1f3c1',
			'1f6e1',
			'1f3bd',
			'1f3c0',
			'26f3',
			'1f3f3',
			'1f3f7',
			'1f3d0',
			'1f3c5',
			'26f8',
			'1f3af',
			'1f4e3',
			'1f4e1',
			'1f489',
			'1f6a9',
			'1f3f8',
			'1f39f',
			'1f3d1',
			'1f310',
			'1f3b2',
			'1f5e1',
			'1f4fa',
			'26a1',
			'1f3f5',
			'1f3c6',
			'26be',
			'1f3d2',
			'1f45f',
			'1f682',
			'26f5',
			'26f4',
			'1f690',
			'1f698',
			'1f686',
			'1f6e5',
			'1f681',
			'1f685',
			'1f699',
			'1f69e',
			'1f684',
			'1f693',
			'1f691',
			'1f68c',
			'1f697',
			'1f6a2',
			'1f688',
			'1f6e3',
			'1f69f',
			'1f683',
			'1f6f0',
			'1f694',
			'1f680',
			'1f6ec',
			'1f696',
			'2708',
			'1f689',
			'1f692',
			'1f69a',
			'1f695',
			'1f68d',
			'1f69d',
			'1f69c',
			'1f6b2',
			'1f6a5',
			'1f68a',
			'1f6a7',
			'1f6a6',
			'1f68f',
			'1f69b',
			'1f68b',
			'1f6eb',
			'1f6e9',
			'1f687',
			'1f68e',
			'1f6e4',
			'1f6f3',
			'1f3b8',
			'1f39e',
			'1f4fd',
			'1f3b9',
			'1f3ab',
			'1f4fc',
			'1f4f7',
			'1f399',
			'1f3b5',
			'1f3bc',
			'1f3a4',
			'1f4c0',
			'1f309',
			'1f3ac',
			'1f4f8',
			'1f3b4',
			'1f3bb',
			'1f5bc',
			'1f54a',
			'1f3a7',
			'1f4f9',
			'1f391',
			'1f004',
			'1f5ff',
			'1f4ef',
			'1f3b7',
			'1f4bf',
			'1f3a5',
			'1f3ee',
			'1f4ff',
			'1f3a8',
			'1f3b6',
			'1f3ba',
			'1f451',
			'1f6cb',
			'1f459',
			'1f485-1f3fe',
			'1f457',
			'1f462',
			'1f485',
			'1f6cf',
			'1f485-1f3fd',
			'1f45e',
			'1f52e',
			'1f458',
			'1f485-1f3fb',
			'1f461',
			'1f485-1f3ff',
			'1f452',
			'1f454',
			'1f441',
			'1f45b',
			'1f456',
			'1f485-1f3fc',
			'1f48b',
			'1f48c',
			'1f390',
			'1f45a',
			'1f45c',
			'1f45d',
			'1f453',
			'1f460',
			'1f484',
			'1f441-1f5e8',
			'1f576',
			'1f440',
			'1f455',
			'1f55b',
			'1f560',
			'1f557',
			'1f558',
			'1f55a',
			'1f554',
			'1f551',
			'1f55d',
			'1f55f',
			'1f55e',
			'1f555',
			'1f561',
			'1f567',
			'1f566',
			'1f552',
			'1f559',
			'1f563',
			'1f565',
			'1f55c',
			'1f556',
			'1f562',
			'1f564',
			'1f553',
			'1f550',
			'1f4ca',
			'1f4b8',
			'1f4c1',
			'1f5a5',
			'231a',
			'1f4d6',
			'1f5c2',
			'1f4c9',
			'23f0',
			'1f4e5',
			'1f4cc',
			'1f6e0',
			'1f4bb',
			'1f4d2',
			'1f4e7',
			'1f5de',
			'1f4cd',
			'26cf',
			'1f50e',
			'1f529',
			'1f50f',
			'1f4c7',
			'1f58c',
			'1f4c8',
			'1f5c3',
			'1f4da',
			'1f4e9',
			'260e',
			'1f526',
			'1f4cb',
			'1f58b',
			'1f4ee',
			'1f52c',
			'2328',
			'1f4dd',
			'1f4d1',
			'1f4ea',
			'1f5a8',
			'1f4b3',
			'1f4b6',
			'1f5fd',
			'1f4db',
			'1f5f3',
			'1f4d3',
			'1f570',
			'1f3e7',
			'1f4d5',
			'1f5b1',
			'2709',
			'1f4e6',
			'23f1',
			'1f50d',
			'23f2',
			'1f4e0',
			'2712',
			'1f587',
			'1f4d0',
			'1f4dc',
			'1f4f2',
			'1f5b2',
			'1f4e8',
			'1f52d',
			'1f58d',
			'1f4c2',
			'1f527',
			'1f58a',
			'1f4bd',
			'1f4b7',
			'1f573',
			'1f4d8',
			'1f5d1',
			'1f4bc',
			'26d1',
			'1f4e4',
			'1f4eb',
			'1f4ec',
			'1f4d4',
			'1f5c4',
			'1f4be',
			'1f4ed',
			'1f4b4',
			'1f4df',
			'1f4cf',
			'1f4c4',
			'1f4b0',
			'270f',
			'1f4d7',
			'1f4ba',
			'1f4d9',
			'1f4f0',
			'2692',
			'1f4b5',
			'1f5dc',
			'1f4ce',
			'1f4de',
			'1f4f1',
			'1f528',
			'1f4c3',
			'1f3e0',
			'1f6bd',
			'1f3d7',
			'1f54d',
			'1f5dd',
			'1f3ed',
			'1f3e1',
			'1f511',
			'1f3df',
			'1f306',
			'1f512',
			'1f6aa',
			'1f510',
			'1f3e6',
			'1f6c1',
			'26ea',
			'1f3ea',
			'26e9',
			'1f3ef',
			'26fd',
			'1f3e2',
			'1f3d8',
			'1f3e3',
			'1f303',
			'1f513',
			'1f54c',
			'1f5fc',
			'1f3e8',
			'1f3e4',
			'26f2',
			'1f301',
			'1f3e5',
			'1f3e9',
			'1f3ec',
			'1f3db',
			'1f3d9',
			'1f307',
			'1f3da',
			'1f3f0',
			'1f6bf',
			'1f54b',
			'1f488',
			'1f3eb',
		];
		/**
		 * Fake image width.
		 */
		const IMAGE_WIDTH = 700;
		/**
		 * Fake image height.
		 */
		const IMAGE_HEIGHT = 400;

		/**
		 * Return a new object of this object type.
		 *
		 * @param bool $save Save the object before returning or not.
		 * @return array
		 */
		abstract public static function generate( $save = true);

		/**
		 * Generate and upload a random image.
		 *
		 * @param int $parent Parent ID.
		 *
		 * @return int The attachment id of the image (0 on failure).
		 */
		protected static function generateImage( int $parent = 0 ) {
			// Build the image.
			$faker            = \Faker\Factory::create();
			$image            = @imagecreatetruecolor( self::IMAGE_WIDTH, self::IMAGE_HEIGHT );
			$background_rgb   = $faker->rgbColorAsArray;
			$background_color = imagecolorallocate( $image, $background_rgb[0], $background_rgb[1], $background_rgb[2] );
			imagefill( $image, 0, 0, $background_color );
            $im = self::GetEmojiImage();
			imagecopymerge( $image, $im, ( self::IMAGE_WIDTH - 72 ) / 2, ( self::IMAGE_HEIGHT - 72 ) / 2, 0, 0, 72, 72, 90 );
			ob_start();
			imagepng( $image );
			$file = ob_get_clean();
			imagedestroy( $image );
			$name          = 'img-' . rand() . '.png';
			$attachment_id = 0;
			// Upload the image.
			$upload = wp_upload_bits( $name, '', $file );
			if ( empty( $upload['error'] ) ) {
				$attachment_id = (int) wp_insert_attachment(
					array(
						'post_title'     => $name,
						'post_mime_type' => $upload['type'],
						'post_status'    => 'publish',
						'post_content'   => '',
					),
					$upload['file']
				);
			}
			if ( $attachment_id ) {
				if ( ! function_exists( 'wp_generate_attachment_metadata' ) ) {
					include_once ABSPATH . 'wp-admin/includes/image.php';
				}
				$metadata = wp_generate_attachment_metadata( $attachment_id, $upload['file'] );
				wp_update_attachment_metadata( $attachment_id, $metadata );
				if ( $parent ) {
					update_post_meta( $parent, '_thumbnail_id', $attachment_id );
				}
			}
			return $attachment_id;
		}

		/**
		 * Get a random value from an array based on weight.
		 * Taken from https://stackoverflow.com/questions/445235/generating-random-results-by-weight-in-php
		 *
		 * @param array $weighted_values Array of value => weight options.
		 * @return mixed
		 */
		protected static function random_weighted_element( array $weighted_values ) {
			$rand = mt_rand( 1, (int) array_sum( $weighted_values ) );
			foreach ( $weighted_values as $key => $value ) {
				$rand -= $value;
				if ( $rand <= 0 ) {
					return $key;
				}
			}
		}

		/**
		 * Get random term ids.
		 *
		 * @param int    $limit Number of term IDs to get.
		 * @param string $taxonomy Taxonomy name.
		 * @return array
		 */
		protected static function generate_term_ids( $limit, $taxonomy ) {
			$faker    = \Faker\Factory::create();
			$terms    = $faker->words( $limit );
			$term_ids = array();
			foreach ( $terms as $term ) {
				$existing = get_term_by( 'name', $term, $taxonomy );
				if ( $existing ) {
					$term_ids[] = $existing->term_id;
				} else {
					$term = wp_insert_term( $term, $taxonomy );
					if ( $term && ! is_wp_error( $term ) ) {
						$term_ids[] = $term['term_id'];
					}
				}
			}
			return $term_ids;
		}

        private static function GetEmojiImage()
        {
            $faker            = \Faker\Factory::create();
            $src = $faker->randomElement( self::emojis );
            $im  = @imagecreatefrompng( "http://twemoji.maxcdn.com/2/72x72/$src.png" );
            if (!$im){
                return self::GetEmojiImage();
            }
            return $im;
        }
    }
}
