<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dictionary;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dictionaries')->insert([
        
            'keywordId'=>'1',
            'keywordName'=>'absolute',
            'mainTermId' => '1',
        ]);
            
        DB::table('dictionaries')->insert([   

            'keywordId'=>'2',
            'keywordName'=>'performance',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
        
            'keywordId'=>'3',
            'keywordName'=>'abstract',
            'mainTermId' => '1',
            ]);
    
        DB::table('dictionaries')->insert([
            'keywordId'=>'4',
            'keywordName'=>'structure',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'5',
            'keywordName'=>'acyclic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'6',
            'keywordName'=>'graph',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'7',
            'keywordName'=>'heap',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'8',
            'keywordName'=>'huffman',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'9',
            'keywordName'=>'coding',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'10',
            'keywordName'=>'array',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'11',
            'keywordName'=>'merg',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'12',
            'keywordName'=>'asymptotic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'13',
            'keywordName'=>'complexity',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'14',
            'keywordName'=>'augmenting',
            'mainTermId' => '1',
            
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'15',
            'keywordName'=>'backtracking',
            'mainTermId' => '1',

            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'16',
            'keywordName'=>'binary',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'17',
            'keywordName'=>'quicksort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'18',
            'keywordName'=>'binarytree',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'19',
            'keywordName'=>'binomial',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'20',
            'keywordName'=>'big-O',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'21',
            'keywordName'=>'boolean',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'22',
            'keywordName'=>'breadth-first',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'23',
            'keywordName'=>'bubblesort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'24',
            'keywordName'=>'B-tree',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'25',
            'keywordName'=>'chain',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'26',
            'keywordName'=>'queue',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'27',
            'keywordName'=>'depth-first',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'28',
            'keywordName'=>'descendant',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'29',
            'keywordName'=>'deterministic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'30',
            'keywordName'=>'dichotomic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'31',
            'keywordName'=>'disjunction',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'32',
            'keywordName'=>'conquer',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'33',
            'keywordName'=>'division',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'34',
            'keywordName'=>'hashing',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'35',
            'keywordName'=>'linkedlist',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'36',
            'keywordName'=>'dynamic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'37',
            'keywordName'=>'programming',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'38',
            'keywordName'=>'argument',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'39',
            'keywordName'=>'prefix',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'40',
            'keywordName'=>'function',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'41',
            'keywordName'=>'recursive',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'42',
            'keywordName'=>'permutation',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'43',
            'keywordName'=>'polynomial',
            'mainTermId' => '1',
            ]);
        DB::table('dictionaries')->insert([

            'keywordId'=>'44',
            'keywordName'=>'pointer',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'45',
            'keywordName'=>'pre-order',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'46',
            'keywordName'=>'traversal',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'47',
            'keywordName'=>'priority',
            'mainTermId' => '1',

            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'48',
            'keywordName'=>'probe',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'49',
            'keywordName'=>'algebra',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'50',
            'keywordName'=>'datastructure',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([

            'keywordId'=>'51',
            'keywordName'=>'finite-state-machine',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'52',
            'keywordName'=>'factorial',
            'mainTermId' => '1',
            ]);


        DB::table('dictionaries')->insert([
            'keywordId'=>'53',
            'keywordName'=>'Fibonaccian',
            'mainTermId' => '1',
            ]);
  
        DB::table('dictionaries')->insert([
            'keywordId'=>'54',
            'keywordName'=>'Fourier',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'55',
            'keywordName'=>'conservation',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'56',
            'keywordName'=>'fractionaln',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'57',
            'keywordName'=>'persistent',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'58',
            'keywordName'=>'coloring',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'59',
            'keywordName'=>'optimum',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'60',
            'keywordName'=>'gamma',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'61',
            'keywordName'=>'greedy',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'62',
            'keywordName'=>'heuristic',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'63',
            'keywordName'=>'grid',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'64',
            'keywordName'=>'Hamming',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'65',
            'keywordName'=>'heapsort',
            'mainTermId' => '1',
            ]);

        DB::table('dictionaries')->insert([
            'keywordId'=>'66',
            'keywordName'=>'heuristic',
            'mainTermId' => '1',
            ]);

          DB::table('dictionaries')->insert([
            'keywordId'=>'67',
            'keywordName'=>'hidden-Markov-model',
            'mainTermId' => '1',
            ]);

          DB::table('dictionaries')->insert([
            'keywordId'=>'68',
            'keywordName'=>'in-order',
            'mainTermId' => '1',
            ]);
  
            DB::table('dictionaries')->insert([
            'keywordId'=>'69',
            'keywordName'=>'insertion',
            'mainTermId' => '1',
            ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'70',
            'keywordName'=>'linear-program',
            'mainTermId' => '1',
            ]);
            DB::table('dictionaries')->insert([
            'keywordId'=>'71',
            'keywordName'=>'inference',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'72',
            'keywordName'=>'expertise',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'73',
            'keywordName'=>'discriminative',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'74',
            'keywordName'=>'variants',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'75',
            'keywordName'=>'precomputed',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'76',
            'keywordName'=>'fuzzy',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'77',
            'keywordName'=>'asynchrony',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'78',
            'keywordName'=>'propositional',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'79',
            'keywordName'=>'modus',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'80',
            'keywordName'=>'tollens',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'81',
            'keywordName'=>'predicate',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'82',
            'keywordName'=>'semantics',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'83',
            'keywordName'=>'natural',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'84',
            'keywordName'=>'language',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'85',
            'keywordName'=>'forward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'86',
            'keywordName'=>'chaining',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'87',
            'keywordName'=>'artificial',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'88',
            'keywordName'=>'intelligence',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'89',
            'keywordName'=>'frame',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'90',
            'keywordName'=>'ponens',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'91',
            'keywordName'=>'learning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'92',
            'keywordName'=>'regularizer',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'93',
            'keywordName'=>'textual',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'94',
            'keywordName'=>'firing',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'95',
            'keywordName'=>'stochastic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'96',
            'keywordName'=>'syntax',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'97',
            'keywordName'=>'framework',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'98',
            'keywordName'=>'experts',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'99',
            'keywordName'=>'embedding',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'100',
            'keywordName'=>'entropy',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'101',
            'keywordName'=>'tenant',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'102',
            'keywordName'=>'models',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'103',
            'keywordName'=>'synthesis',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'104',
            'keywordName'=>'homogeneous',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'105',
            'keywordName'=>'semantic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'106',
            'keywordName'=>'nets',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'107',
            'keywordName'=>'prediction',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'108',
            'keywordName'=>'gradient',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'109',
            'keywordName'=>'morphology',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'110',
            'keywordName'=>'insights',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'111',
            'keywordName'=>'goal-seeking',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'112',
            'keywordName'=>'heuristic',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
        

            'keywordId'=>'113',
            'keywordName'=>'reasoning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'114',
            'keywordName'=>'inference',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'115',
            'keywordName'=>'engine',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'116',
            'keywordName'=>'intelligent',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'117',
            'keywordName'=>'agent',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'118',
            'keywordName'=>'propositional',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'119',
            'keywordName'=>'scripting',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'120',
            'keywordName'=>'prolog',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'121',
            'keywordName'=>'backward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'122',
            'keywordName'=>'forward',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'123',
            'keywordName'=>'game',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'124',
            'keywordName'=>'planning',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'125',
            'keywordName'=>'conceptual',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'126',
            'keywordName'=>'dependency',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'127',
            'keywordName'=>'cloud computing',
            'mainTermId' => '3',
            ]);

            DB::table('dictionaries')->insert([
           'keywordId'=>'128',
            'keywordName'=>'bandwidth',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'129',
            'keywordName'=>'topologies',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'130',
            'keywordName'=>'gradient',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'131',
            'keywordName'=>'architecture',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'132',
            'keywordName'=>'access',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'133',
            'keywordName'=>'adjacent',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'134',
            'keywordName'=>'descent',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'135',
            'keywordName'=>'analog',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'136',
            'keywordName'=>'api',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'137',
            'keywordName'=>'ascii',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'138',
            'keywordName'=>'distributed',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'139',
            'keywordName'=>'aui',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'140',
            'keywordName'=>'attenuation',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'141',
            'keywordName'=>'atmd ',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'142',
            'keywordName'=>'delays',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'143',
            'keywordName'=>'bandwidth',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'144',
            'keywordName'=>'basestation',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'145',
            'keywordName'=>'baseband',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'146',
            'keywordName'=>'insights',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'147',
            'keywordName'=>'block',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'148',
            'keywordName'=>'blockage',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'149',
            'keywordName'=>'setup',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'150',
            'keywordName'=>'computing',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'151',
            'keywordName'=>'cdma',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'152',
            'keywordName'=>'cell',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'153',
            'keywordName'=>'splitting',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'154',
            'keywordName'=>'cellular',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'155',
            'keywordName'=>'channel',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'156',
            'keywordName'=>'prototype',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'157',
            'keywordName'=>'hop',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'158',
            'keywordName'=>'mobile',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'159',
            'keywordName'=>'crosstalk',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'160',
            'keywordName'=>'csma/ca',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'161',
            'keywordName'=>'csma/cd',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'162',
            'keywordName'=>'caching',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'163',
            'keywordName'=>'decompression',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'164',
            'keywordName'=>'assistant',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'165',
            'keywordName'=>'dedicated',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'166',
            'keywordName'=>'downlink',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'167',
            'keywordName'=>'driver',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'168',
            'keywordName'=>'dsu',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'169',
            'keywordName'=>'dual-mode',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'170',
            'keywordName'=>'duplex',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'171',
            'keywordName'=>'electromagnetic',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'172',
            'keywordName'=>'encryption',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'173',
            'keywordName'=>'delivery',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'174',
            'keywordName'=>'erlang',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'175',
            'keywordName'=>'fading',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'176',
            'keywordName'=>'firewall',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'177',
            'keywordName'=>'fdma',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'178',
            'keywordName'=>'frequency',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'179',
            'keywordName'=>'geosynchronous',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'180',
            'keywordName'=>'handoff',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'181',
            'keywordName'=>'hopping',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'182',
            'keywordName'=>'host',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'183',
            'keywordName'=>'callbacks',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'184',
            'keywordName'=>'infrared',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'185',
            'keywordName'=>'infrastructure',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'186',
            'keywordName'=>'ka-band',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'187',
            'keywordName'=>'laser',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'188',
            'keywordName'=>'line-of-sight',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'189',
            'keywordName'=>'loop ',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'190',
            'keywordName'=>'directory',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'191',
            'keywordName'=>'man',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'192',
            'keywordName'=>'mbps',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'193',
            'keywordName'=>'narrow',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'194',
            'keywordName'=>'interface',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'195',
            'keywordName'=>'metrics',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'196',
            'keywordName'=>'point-of-presence',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'197',
            'keywordName'=>'portable',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'198',
            'keywordName'=>'roaming',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'199',
            'keywordName'=>'router',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'200',
            'keywordName'=>'message',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'201',
            'keywordName'=>'Wide Area Network',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'202',
            'keywordName'=>'Android',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'203',
            'keywordName'=>'Arduino',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'204',
            'keywordName'=>'Servlets',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'205',
            'keywordName'=>'Socket Programming',
            'mainTermId' => '17',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'206',
            'keywordName'=>'.NET',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'207',
            'keywordName'=>'ASP.NET',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'208',
            'keywordName'=>'ASP.NET MVC',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'209',
            'keywordName'=>'C',
            'mainTermId' => '7',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'210',
            'keywordName'=>'C#',
            'mainTermId' => '7',
            ]);

            
            
              DB::table('dictionaries')->insert([
            'keywordId'=>'211',
            'keywordName'=>'C++',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'212',
            'keywordName'=>'CakePHP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'213',
            'keywordName'=>'Core Java',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'214',
            'keywordName'=>'Eclipse',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'215',
            'keywordName'=>'J2EE',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'216',
            'keywordName'=>'Java',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'217',
            'keywordName'=>'Matlab',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'218',
            'keywordName'=>'Maven',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'219',
            'keywordName'=>'NetBeans',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'220',
            'keywordName'=>'PHP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'221',
            'keywordName'=>'Python',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'222',
            'keywordName'=>'Visual Basic',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'223',
            'keywordName'=>'Visual C++',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'224',
            'keywordName'=>'AJAX',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'225',
            'keywordName'=>'CSS',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'226',
            'keywordName'=>'HTML',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'227',
            'keywordName'=>'HTML 5',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'228',
            'keywordName'=>'jQuery',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'229',
            'keywordName'=>'JSON',
            'mainTermId' => '7',
              ]);
              DB::table('dictionaries')->insert([

            'keywordId'=>'230',
            'keywordName'=>'JSP',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'231',
            'keywordName'=>'LaTeX',
            'mainTermId' => '7',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'232',
            'keywordName'=>'XML',
            'mainTermId' => '7',
              ]);
              
              DB::table('dictionaries')->insert([  

            'keywordId'=>'233',
            'keywordName'=>'architectural',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'234',
            'keywordName'=>'software',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'235',
            'keywordName'=>'development',
            'mainTermId' => '27',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'236',
            'keywordName'=>'Linux',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'237',
            'keywordName'=>'Ubuntu',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'238',
            'keywordName'=>'Windows',
            'mainTermId' => '22',
              ]);
              
              DB::table('dictionaries')->insert([

            'keywordId'=>'239',
            'keywordName'=>'Windows',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'240',
            'keywordName'=>'blocked state',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'241',
            'keywordName'=>'process',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'242',
            'keywordName'=>'child',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'243',
            'keywordName'=>'kernal',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'244',
            'keywordName'=>'mode',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'245',
            'keywordName'=>'block',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'246',
            'keywordName'=>'image',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'247',
            'keywordName'=>'state',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'248',
            'keywordName'=>'roundrobin',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'249',
            'keywordName'=>'suspended',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'250',
            'keywordName'=>'swapping',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'251',
            'keywordName'=>'thread',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'252',
            'keywordName'=>'microkernel',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'253',
            'keywordName'=>'multithreading',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'254',
            'keywordName'=>'semaphore',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'255',
            'keywordName'=>'blocking',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([


            'keywordId'=>'256',
            'keywordName'=>'concurrency',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'257',
            'keywordName'=>'exclusion',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'258',
            'keywordName'=>'circular wait',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'259',
            'keywordName'=>'deadlock',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'260',
            'keywordName'=>'avoidance',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'261',
            'keywordName'=>'detection',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'262',
            'keywordName'=>'prevention',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'263',
            'keywordName'=>'hold and wait',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'264',
            'keywordName'=>'mutual',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'265',
            'keywordName'=>'compaction',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'266',
            'keywordName'=>'linking',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'267',
            'keywordName'=>'partitioning',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'268',
            'keywordName'=>'loading',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'269',
            'keywordName'=>'external',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'270',
            'keywordName'=>'fragmentation',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'271',
            'keywordName'=>'frame',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([
            'keywordId'=>'272',
            'keywordName'=>'internal',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'273',
            'keywordName'=>'logical',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'274',
            'keywordName'=>'memory',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'275',
            'keywordName'=>'management',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'276',
            'keywordName'=>'page table',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'277',
            'keywordName'=>'paging',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'278',
            'keywordName'=>'address',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'279',
            'keywordName'=>'relocatable',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'280',
            'keywordName'=>'relocation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'281',
            'keywordName'=>'segmentation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'282',
            'keywordName'=>'mapping',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'283',
            'keywordName'=>'mapping',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'284',
            'keywordName'=>'c',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'285',
            'keywordName'=>'fetch',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'286',
            'keywordName'=>'locality',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'287',
            'keywordName'=>'replacement',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'288',
            'keywordName'=>'real memory',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'289',
            'keywordName'=>'lookaside',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'290',
            'keywordName'=>'buffer',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'291',
            'keywordName'=>'virtual',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'292',
            'keywordName'=>'block-oriented',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'293',
            'keywordName'=>'CD-R',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'294',
            'keywordName'=>'CD-ROM',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'295',
            'keywordName'=>'CD-RW',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'296',
            'keywordName'=>'Cylinder',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'297',
            'keywordName'=>'CD-RW',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
             'keywordId'=>'298',
            'keywordName'=>'DVD',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'299',
            'keywordName'=>'DMA',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'300',
            'keywordName'=>'cache',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'301',
            'keywordName'=>'floppy',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'302',
            'keywordName'=>'hard disk',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'303',
            'keywordName'=>'hard disk',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'304',
            'keywordName'=>'channel',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'305',
            'keywordName'=>'processor',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'306',
            'keywordName'=>'device',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'307',
            'keywordName'=>'magnetic',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'308',
            'keywordName'=>'magneto-optical',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'309',
            'keywordName'=>'magneto-optical',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'310',
            'keywordName'=>'programmed',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'311',
            'keywordName'=>'read',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'312',
            'keywordName'=>'write',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'313',
            'keywordName'=>'delay',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'314',
            'keywordName'=>'I/O',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'315',
            'keywordName'=>'sector',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

             
            'keywordId'=>'316',
            'keywordName'=>'seek-yime',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'317',
            'keywordName'=>'track',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'318',
            'keywordName'=>'transfer',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'319',
            'keywordName'=>'chained',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'320',
            'keywordName'=>'allocation',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'321',
            'keywordName'=>'field',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'322',
            'keywordName'=>'field',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'323',
            'keywordName'=>'FAT',
            'mainTermId' => '22',
              ]);

              DB::table('dictionaries')->insert([

            'keywordId'=>'324',
            'keywordName'=>'directory',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'325',
            'keywordName'=>'index',
            'mainTermId' => '22',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'326',
            'keywordName'=>'pathname',
            'mainTermId' => '22',
              ]);

             DB::table('dictionaries')->insert([
            'keywordId'=>'327',
            'keywordName'=>'Drupal',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'328',
            'keywordName'=>'Joomla',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'329',
            'keywordName'=>'Git',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'330',
            'keywordName'=>'UML',
            'mainTermId' => '26',
              ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'331',
            'keywordName'=>'Wordpress',
            'mainTermId' => '26',
              ]);


            DB::table('dictionaries')->insert([
            'keywordId'=>'332',
            'keywordName'=>'Apache',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'333',
            'keywordName'=>'Hibernate',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            
            'keywordId'=>'334',
            'keywordName'=>'Microsoft SQL Server',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'335',
            'keywordName'=>'MongoDB',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'336',
            'keywordName'=>'MySQL',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'337',
            'keywordName'=>'NoSQL',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'338',
            'keywordName'=>'Spring',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'339',
            'keywordName'=>'Tomcat',
            'mainTermId' => '12',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'340',
            'keywordName'=>'Machine',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'341',
            'keywordName'=>'Mining',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'342',
            'keywordName'=>'Learning',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'343',
            'keywordName'=>'Association',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'344',
            'keywordName'=>'Rule',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'345',
            'keywordName'=>'Information',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'346',
            'keywordName'=>'Retrieval',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'347',
            'keywordName'=>'Indexation',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'348',
            'keywordName'=>'Support',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'349',
            'keywordName'=>'Vector',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'350',
            'keywordName'=>'Clustering',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'351',
            'keywordName'=>'Filtering',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'352',
            'keywordName'=>'Satisfiability',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'353',
            'keywordName'=>'Feature',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'354',
            'keywordName'=>'Data',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'355',
            'keywordName'=>'Evaluation',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'356',
            'keywordName'=>'Decision',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'357',
            'keywordName'=>'Tree',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'358',
            'keywordName'=>'Sets',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'359',
            'keywordName'=>'Neural',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'360',
            'keywordName'=>'Network',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'361',
            'keywordName'=>'Classification',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'362',
            'keywordName'=>'Knowledge',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'363',
            'keywordName'=>'Naive',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'364',
            'keywordName'=>'Bayes',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'365',
            'keywordName'=>'Unsupervised',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'366',
            'keywordName'=>'Learning',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
            'keywordId'=>'367',
            'keywordName'=>'Recognition',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'368',
            'keywordName'=>'K-Means',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'369',
            'keywordName'=>'SOM',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'370',
            'keywordName'=>'Nearest',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'371',
            'keywordName'=>'Neighbor',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
             
            'keywordId'=>'372',
            'keywordName'=>'Regression',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'373',
            'keywordName'=>'Detection',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'374',
            'keywordName'=>'Hierarchical',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'375',
            'keywordName'=>'Probabilistic',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'376',
            'keywordName'=>'Euclidean',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'377',
            'keywordName'=>'Distance',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'378',
            'keywordName'=>'Integrity',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'379',
            'keywordName'=>'Dataset',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([

            'keywordId'=>'380',
            'keywordName'=>'Eigenvectors',
            'mainTermId' => '10',
            ]);

            DB::table('dictionaries')->insert([
              'keywordId'=>'381',
                    'keywordName'=>'annotation',
                    'mainTermId' => '4',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'382',
                    'keywordName'=>'big data',
                    'mainTermId' => '4',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'383',
                    'keywordName'=>'BioConductor',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'384',
                    'keywordName'=>'bacterial',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'385',
                    'keywordName'=>'comparative',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'386',
                    'keywordName'=>'glycobioinformatics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'387',
                    'keywordName'=>'medical',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'388',
                    'keywordName'=>'molecular',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'389',
                    'keywordName'=>'pharmaceutical',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'390',
                    'keywordName'=>'biological databases',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'391',
                    'keywordName'=>'bioMOBY',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'392',
                    'keywordName'=>'BIONLP',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'393',
                    'keywordName'=>'BioPax',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'394',
                    'keywordName'=>'bioperl',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'395',
                    'keywordName'=>'biopython',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'396',
                    'keywordName'=>'biosemiotics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'397',
                    'keywordName'=>'BISTI Consortium',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'398',
                    'keywordName'=>'comparative systems biology',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'399',
                    'keywordName'=>'computational annotation',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'400',
                    'keywordName'=>'computational biology',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'401',
                    'keywordName'=>'conceptual biology',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'402',
                    'keywordName'=>'curated databases',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'403',
                    'keywordName'=>'distributed annotation system',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'404',
                    'keywordName'=>'dynamic modeling',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'405',
                    'keywordName'=>'euclidean distance',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'406',
                    'keywordName'=>'functional bioinformatics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'407',
                    'keywordName'=>'molecular information theory',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'408',
                    'keywordName'=>'prediction',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'409',
                    'keywordName'=>'proprietary databases',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'410',
                    'keywordName'=>'computational gene recognition',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'411',
                    'keywordName'=>'gene recognition',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'412',
                    'keywordName'=>'molecular recognition',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'413',
                    'keywordName'=>'spatio temporal dynamics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'414',
                    'keywordName'=>'cybernetics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'415',
                    'keywordName'=>'thresholding',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'416',
                    'keywordName'=>'translational bioinformatics',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'417',
                    'keywordName'=>'hepatocyte',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'418',
                    'keywordName'=>'semantic',
                    'mainTermId' => '4',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'419',
                    'keywordName'=>'Yeast Artificial Chromosome (YAC)',
                    'mainTermId' => '4',
              ]);
        
        
        
        
        
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'420',
                    'keywordName'=>'compiler',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'421',
                    'keywordName'=>'analysis',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'422',
                    'keywordName'=>'synthesis',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'423',
                    'keywordName'=>'loader',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'424',
                    'keywordName'=>'loading',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'425',
                    'keywordName'=>'preprocessor',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'426',
                    'keywordName'=>'assembler',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'427',
                    'keywordName'=>'sentinel',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'428',
                    'keywordName'=>'recognizers',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'429',
                    'keywordName'=>'parser',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'430',
                    'keywordName'=>'terminals',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'431',
                    'keywordName'=>'parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'432',
                    'keywordName'=>'handle',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'433',
                    'keywordName'=>'kernel',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'434',
                    'keywordName'=>'quadruple',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'435',
                    'keywordName'=>'triples',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'436',
                    'keywordName'=>'declaration',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'437',
                    'keywordName'=>'DAG',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'438',
                    'keywordName'=>'backpatching',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'439',
                    'keywordName'=>'heap',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'440',
                    'keywordName'=>'padding',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'441',
                    'keywordName'=>'block',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'442',
                    'keywordName'=>'environment',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'443',
                    'keywordName'=>'state',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'444',
                    'keywordName'=>'structure editor',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'445',
                    'keywordName'=>'static checker',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'446',
                    'keywordName'=>'linear analysis',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'447',
                    'keywordName'=>'hierarchical analysis',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'448',
                    'keywordName'=>'semantic analysis',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'449',
                    'keywordName'=>'link editing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'450',
                    'keywordName'=>'symbol table',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'451',
                    'keywordName'=>'regular set',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'452',
                    'keywordName'=>'regular expression',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'453',
                    'keywordName'=>'error handler',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'454',
                    'keywordName'=>'context free grammar',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'455',
                    'keywordName'=>'nonterminals',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'456',
                    'keywordName'=>'start symbol',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'457',
                    'keywordName'=>'context free language',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'458',
                    'keywordName'=>'left most derivations',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'459',
                    'keywordName'=>'canonical derivations',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'460',
                    'keywordName'=>'parse tree',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'461',
                    'keywordName'=>'ambiguous grammar',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'462',
                    'keywordName'=>'left factoring',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'463',
                    'keywordName'=>'top down parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'464',
                    'keywordName'=>'recursive descent parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'465',
                    'keywordName'=>'predictive parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'466',
                    'keywordName'=>'bottom up parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'467',
                    'keywordName'=>'shift-reduce parsing',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'468',
                    'keywordName'=>'viable prefixes',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'469',
                    'keywordName'=>'operator grammar',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'470',
                    'keywordName'=>'lr parsing method',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'471',
                    'keywordName'=>'goto function',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'472',
                    'keywordName'=>'lr grammar',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'473',
                    'keywordName'=>'non kernel items',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'474',
                    'keywordName'=>'postfix notation',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'475',
                    'keywordName'=>'three-address code',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'476',
                    'keywordName'=>'abstract or syntax tree',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'477',
                    'keywordName'=>'syntax directed definition',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'478',
                    'keywordName'=>'boolean expression',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'479',
                    'keywordName'=>'calling sequence',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'480',
                    'keywordName'=>'back patching',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'481',
                    'keywordName'=>'basic blocks',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'482',
                    'keywordName'=>'flow graph',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'483',
                    'keywordName'=>'virtual machine',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'484',
                    'keywordName'=>'back-end intermediate',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'485',
                    'keywordName'=>'relocatable object module',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'486',
                    'keywordName'=>'multiregister operations',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'487',
                    'keywordName'=>'cost of an instruction',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'488',
                    'keywordName'=>'algebraic transformation',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'489',
                    'keywordName'=>'register descriptor',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'490',
                    'keywordName'=>'address descriptor',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'491',
                    'keywordName'=>'local optimization',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'492',
                    'keywordName'=>'constant folding',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'493',
                    'keywordName'=>'common subexpressions',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'494',
                    'keywordName'=>'dead code',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'495',
                    'keywordName'=>'reduction in strength',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'496',
                    'keywordName'=>'loop invariant computation',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'497',
                    'keywordName'=>'static allocation',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'498',
                    'keywordName'=>'activation tree',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'499',
                    'keywordName'=>'control stack',
                    'mainTermId' => '5',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'500',
                    'keywordName'=>'call sequence',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'501',
                    'keywordName'=>'return sequence',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'502',
                    'keywordName'=>'dangling reference',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'503',
                    'keywordName'=>'lexical or static scope rule',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'504',
                    'keywordName'=>'dynamic scope rule',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'505',
                    'keywordName'=>'access link',
                    'mainTermId' => '5',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'506',
                    'keywordName'=>'peephole optimization',
                    'mainTermId' => '5',
              ]);
        
        
        
        
        
        
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'507',
                    'keywordName'=>'wan',
                    'mainTermId' => '6',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'508',
                    'keywordName'=>'lan',
                    'mainTermId' => '6',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'509',
                    'keywordName'=>'internet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'510',
                    'keywordName'=>'intranet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'511',
                    'keywordName'=>'extranet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'512',
                    'keywordName'=>'World Wide Web',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'513',
                    'keywordName'=>'instant messaging',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'514',
                    'keywordName'=>'VoIP (voice over Internet Protocol)',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'515',
                    'keywordName'=>'Really Simple Syndication',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'516',
                    'keywordName'=>'web log',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'517',
                    'keywordName'=>'podcast',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'518',
                    'keywordName'=>'social networking websites',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'519',
                    'keywordName'=>'Chat Rooms',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'520',
                    'keywordName'=>'Public Switched Telephone Network (PSTN)',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'521',
                    'keywordName'=>'Integrated Services Digital Network (ISDN)',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'522',
                    'keywordName'=>'Asymmetric Digital Subscriber Line (ADSL)',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'523',
                    'keywordName'=>'download',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'524',
                    'keywordName'=>'upload',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'525',
                    'keywordName'=>'dial-up',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'526',
                    'keywordName'=>'broadband',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'527',
                    'keywordName'=>'real-time application',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'528',
                    'keywordName'=>'videoconferencing',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'529',
                    'keywordName'=>'E-commerce transactions',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'530',
                    'keywordName'=>'online banking',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'531',
                    'keywordName'=>'instant messaging',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'532',
                    'keywordName'=>'online gaming',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'533',
                    'keywordName'=>'access point',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'534',
                    'keywordName'=>'bandwidth',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'535',
                    'keywordName'=>'cloud',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'536',
                    'keywordName'=>'cookie',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'537',
                    'keywordName'=>'connection',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'538',
                    'keywordName'=>'packet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'539',
                    'keywordName'=>'Network Interface',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'540',
                    'keywordName'=>'protocol',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'541',
                    'keywordName'=>'port',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'542',
                    'keywordName'=>'firewall',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'543',
                    'keywordName'=>'NAT',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'544',
                    'keywordName'=>'VPN',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'545',
                    'keywordName'=>'transport',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'546',
                    'keywordName'=>'Data Link',
                    'mainTermId' => '6',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'547',
                    'keywordName'=>'TCP/IP',
                    'mainTermId' => '6',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'548',
                    'keywordName'=>'internet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'549',
                    'keywordName'=>'Medium Access Control',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'550',
                    'keywordName'=>'ip',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'551',
                    'keywordName'=>'ICMP',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'552',
                    'keywordName'=>'UDP',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'553',
                    'keywordName'=>'HTTP',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'554',
                    'keywordName'=>'FTP',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'555',
                    'keywordName'=>'DNS',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'556',
                    'keywordName'=>'SSH',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'557',
                    'keywordName'=>'domain',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'558',
                    'keywordName'=>'encryption',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'559',
                    'keywordName'=>'endpoint Security',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'560',
                    'keywordName'=>'ethernet',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'561',
                    'keywordName'=>'localhost',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'562',
                    'keywordName'=>'server',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'563',
                    'keywordName'=>'client',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'564',
                    'keywordName'=>'router',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'565',
                    'keywordName'=>'layer',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'566',
                    'keywordName'=>'communications',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'567',
                    'keywordName'=>'transmission',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'568',
                    'keywordName'=>'authenticate',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'569',
                    'keywordName'=>'private',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'570',
                    'keywordName'=>'interconnected',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'571',
                    'keywordName'=>'addressing',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'572',
                    'keywordName'=>'topology',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'573',
                    'keywordName'=>'paths',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'574',
                    'keywordName'=>'data',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'575',
                    'keywordName'=>'routing',
                    'mainTermId' => '6',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'576',
                    'keywordName'=>'architecture',
                    'mainTermId' => '6',
              ]);
        
        
        
        
        
        
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'577',
                    'keywordName'=>'cryptography',
                    'mainTermId' => '8',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'578',
                    'keywordName'=>'data security',
                    'mainTermId' => '8',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'579',
                    'keywordName'=>'protecting',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'580',
                    'keywordName'=>'unauthorized',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'581',
                    'keywordName'=>'public-key',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'582',
                    'keywordName'=>'DES',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'583',
                    'keywordName'=>'safeguarding',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'584',
                    'keywordName'=>'confidential',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'585',
                    'keywordName'=>'cryptographic',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'586',
                    'keywordName'=>'privacy',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'587',
                    'keywordName'=>'algorithm',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'588',
                    'keywordName'=>'attack',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'589',
                    'keywordName'=>'authentication',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'590',
                    'keywordName'=>'back Door',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'591',
                    'keywordName'=>'Blind Signature Scheme',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'592',
                    'keywordName'=>'Block Cipher',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'593',
                    'keywordName'=>'clipper',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'594',
                    'keywordName'=>'decryption',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'595',
                    'keywordName'=>'digital fingerprint',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'596',
                    'keywordName'=>'digital signature',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'597',
                    'keywordName'=>'distributed key',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'598',
                    'keywordName'=>'forgery',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'599',
                    'keywordName'=>'password',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'600',
                    'keywordName'=>'one Time Password',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'601',
                    'keywordName'=>'plain text',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'602',
                    'keywordName'=>'random number generator',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'603',
                    'keywordName'=>'reusable password',
                    'mainTermId' => '8'
                    ]);
        DB::table('dictionaries')->insert([
              'keywordId'=>'604',
                    'keywordName'=>'running time',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'605',
                    'keywordName'=>'secret key',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'606',
                    'keywordName'=>'session key',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'607',
                    'keywordName'=>'SKIPJACK',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'608',
                    'keywordName'=>'sniffing',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'609',
                    'keywordName'=>'splitting',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'610',
                    'keywordName'=>'symmetric cipher',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'611',
                    'keywordName'=>'vernam cipher',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'612',
                    'keywordName'=>'vulnerability',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'613',
                    'keywordName'=>'vpn',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'614',
                    'keywordName'=>'exploit',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'615',
                    'keywordName'=>'breach',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'616',
                    'keywordName'=>'firewall',
                    'mainTermId' => '8',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'617',
                    'keywordName'=>'malware',
                    'mainTermId' => '8',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'618',
                    'keywordName'=>'virus',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'619',
                    'keywordName'=>'ransomware',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'620',
                    'keywordName'=>'trojan horse',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'621',
                    'keywordName'=>'worm',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'622',
                    'keywordName'=>'bot',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'623',
                    'keywordName'=>'botnet',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'624',
                    'keywordName'=>'spyware',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'625',
                    'keywordName'=>'rootkit',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'626',
                    'keywordName'=>'DDoS',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'627',
                    'keywordName'=>'phishing',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'628',
                    'keywordName'=>'spear phishing',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'629',
                    'keywordName'=>'BYOD',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'630',
                    'keywordName'=>'pen-testing',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'631',
                    'keywordName'=>'clickjacking',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'632',
                    'keywordName'=>'deepfake',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'633',
                    'keywordName'=>'white hat',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'634',
                    'keywordName'=>'black hat',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'635',
                    'keywordName'=>'access control',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'636',
                    'keywordName'=>'anti-virus',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'637',
                    'keywordName'=>'apt',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'638',
                    'keywordName'=>'asset',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'639',
                    'keywordName'=>'backing up',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'640',
                    'keywordName'=>'bcp',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'641',
                    'keywordName'=>'behavior monitoring',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'642',
                    'keywordName'=>'blacklist',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'643',
                    'keywordName'=>'bug',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'644',
                    'keywordName'=>'ciphertext',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'645',
                    'keywordName'=>'cnd',
                    'mainTermId' => '8',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'646',
                    'keywordName'=>'cracker',
                    'mainTermId' => '8',
              ]);
        
        
        
        
        
        
        
        
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'647',
                    'keywordName'=>'signaling ',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'648',
                    'keywordName'=>'abbreviated',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'649',
                    'keywordName'=>'access code',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'650',
                    'keywordName'=>'node',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'651',
                    'keywordName'=>'accunet',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'652',
                    'keywordName'=>'acd',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'653',
                    'keywordName'=>'ack',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'654',
                    'keywordName'=>'acoustic',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'655',
                    'keywordName'=>'acs',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'656',
                    'keywordName'=>'ADCCP',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'657',
                    'keywordName'=>'address',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'658',
                    'keywordName'=>'adjacent',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'659',
                    'keywordName'=>'ADPCM',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'660',
                    'keywordName'=>'aliasing',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'661',
                    'keywordName'=>'amplitude',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'662',
                    'keywordName'=>'amplifier',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'663',
                    'keywordName'=>'ambient noice',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'664',
                    'keywordName'=>'an',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'665',
                    'keywordName'=>'analog',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'666',
                    'keywordName'=>'data',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'667',
                    'keywordName'=>'layer',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'668',
                    'keywordName'=>'loopback',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'669',
                    'keywordName'=>'arpa',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'670',
                    'keywordName'=>'arq',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'671',
                    'keywordName'=>'attenuation',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'672',
                    'keywordName'=>'frequencies',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'673',
                    'keywordName'=>'adu',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'674',
                    'keywordName'=>'autobaud',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'675',
                    'keywordName'=>'autodin',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'676',
                    'keywordName'=>'awg',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'677',
                    'keywordName'=>'route',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'678',
                    'keywordName'=>'backup',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'679',
                    'keywordName'=>'backbone',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'680',
                    'keywordName'=>'channel',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'681',
                    'keywordName'=>'splitter',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'682',
                    'keywordName'=>'bandwidth',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'683',
                    'keywordName'=>'transmission',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'684',
                    'keywordName'=>'modem',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'685',
                    'keywordName'=>'baseband',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'686',
                    'keywordName'=>'baudot',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'687',
                    'keywordName'=>'bell',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'688',
                    'keywordName'=>'bert',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'689',
                    'keywordName'=>'bsc',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'690',
                    'keywordName'=>'bit',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'700',
                    'keywordName'=>'stream',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'701',
                    'keywordName'=>'stripping',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'702',
                    'keywordName'=>'blert',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'703',
                    'keywordName'=>'block',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'704',
                    'keywordName'=>'bnc',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'705',
                    'keywordName'=>'multiplexer',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'706',
                    'keywordName'=>'boc',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'707',
                    'keywordName'=>'blank',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'708',
                    'keywordName'=>'boundary',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'709',
                    'keywordName'=>'bps',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'710',
                    'keywordName'=>'break',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'711',
                    'keywordName'=>'broadcast',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'712',
                    'keywordName'=>'bob',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'713',
                    'keywordName'=>'breakout',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'714',
                    'keywordName'=>'broadband',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'715',
                    'keywordName'=>'terminal',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'716',
                    'keywordName'=>'BTAM',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'717',
                    'keywordName'=>'buffer',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'718',
                    'keywordName'=>'burst',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'719',
                    'keywordName'=>'cabinet',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'720',
                    'keywordName'=>'cable',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'721',
                    'keywordName'=>'cache',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'722',
                    'keywordName'=>'call',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'723',
                    'keywordName'=>'module',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'724',
                    'keywordName'=>'carrier',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'725',
                    'keywordName'=>'carterphone',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'726',
                    'keywordName'=>'catv',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'727',
                    'keywordName'=>'ccitt',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'728',
                    'keywordName'=>'centrex',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'729',
                    'keywordName'=>'checksum',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'730',
                    'keywordName'=>'switch',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'731',
                    'keywordName'=>'cluster',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'732',
                    'keywordName'=>'coaxial',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'733',
                    'keywordName'=>'codec',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'734',
                    'keywordName'=>'compression',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'735',
                    'keywordName'=>'concentrator',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'736',
                    'keywordName'=>'concurrent',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'737',
                    'keywordName'=>'connection',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'738',
                    'keywordName'=>'csma',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'739',
                    'keywordName'=>'dataspeed',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'740',
                    'keywordName'=>'dte',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'741',
                    'keywordName'=>'rate',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'742',
                    'keywordName'=>'D-Conditioning',
                    'mainTermId' => '9',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'743',
                    'keywordName'=>'domain',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'744',
                    'keywordName'=>'duplexing',
                    'mainTermId' => '9',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'745',
                    'keywordName'=>'efs',
                    'mainTermId' => '9',
              ]);
        
        
        
        
        
        
        
        
        
        
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'746',
                    'keywordName'=>'structure ',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'747',
                    'keywordName'=>'algorithms',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'748',
                    'keywordName'=>'tree',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'749',
                    'keywordName'=>'rule',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'750',
                    'keywordName'=>'abstract',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'751',
                    'keywordName'=>'acyclic',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'752',
                    'keywordName'=>'graph',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'753',
                    'keywordName'=>'adjacency',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'754',
                    'keywordName'=>'matrix',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'755',
                    'keywordName'=>'adjacent',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'756',
                    'keywordName'=>'adt',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'757',
                    'keywordName'=>'adversary',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'758',
                    'keywordName'=>'aggregate',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'759',
                    'keywordName'=>'type',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'760',
                    'keywordName'=>'analysis',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'761',
                    'keywordName'=>'alias',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'762',
                    'keywordName'=>'alphabet',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'763',
                    'keywordName'=>'trie',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'764',
                    'keywordName'=>'amortized',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'765',
                    'keywordName'=>'ancestor',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'766',
                    'keywordName'=>'antisymmetric',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'767',
                    'keywordName'=>'approximation',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'768',
                    'keywordName'=>'arm',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'769',
                    'keywordName'=>'array',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'770',
                    'keywordName'=>'queue',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'771',
                    'keywordName'=>'coding',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'772',
                    'keywordName'=>'assembly',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'773',
                    'keywordName'=>'code',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'774',
                    'keywordName'=>'stack',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'775',
                    'keywordName'=>'assembly',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'776',
                    'keywordName'=>'asymptotic',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'777',
                    'keywordName'=>'attribute',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'778',
                    'keywordName'=>'automata',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'779',
                    'keywordName'=>'automatic',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'780',
                    'keywordName'=>'average',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'781',
                    'keywordName'=>'avl',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'782',
                    'keywordName'=>'B-tree',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'783',
                    'keywordName'=>'backing',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'784',
                    'keywordName'=>'storage',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'785',
                    'keywordName'=>'backtracking',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'786',
                    'keywordName'=>'bag',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'787',
                    'keywordName'=>'class',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'788',
                    'keywordName'=>'base',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'789',
                    'keywordName'=>'bfs',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'790',
                    'keywordName'=>'big-o',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'791',
                    'keywordName'=>'notation',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'792',
                    'keywordName'=>'sort',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'793',
                    'keywordName'=>'insert',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'794',
                    'keywordName'=>'binary',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'795',
                    'keywordName'=>'binning',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'796',
                    'keywordName'=>'Binsort',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'797',
                    'keywordName'=>'bintree',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'798',
                    'keywordName'=>'bitmap',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'799',
                    'keywordName'=>'vector',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'800',
                    'keywordName'=>'boolean',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'801',
                    'keywordName'=>'bounding',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'801',
                    'keywordName'=>'branch-and-bounds',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'802',
                    'keywordName'=>'breadth-first search',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'803',
                    'keywordName'=>'break-even',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'804',
                    'keywordName'=>'point',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'805',
                    'keywordName'=>'bst',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'806',
                    'keywordName'=>'bubble',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'807',
                    'keywordName'=>'bucket',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'808',
                    'keywordName'=>'buddy',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'809',
                    'keywordName'=>'method',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'810',
                    'keywordName'=>'hashing',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'811',
                    'keywordName'=>'buffer',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'812',
                    'keywordName'=>'passing',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'813',
                    'keywordName'=>'pool',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'814',
                    'keywordName'=>'buffering',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'815',
                    'keywordName'=>'caching',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'816',
                    'keywordName'=>'Cartesian',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'817',
                    'keywordName'=>'product',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'818',
                    'keywordName'=>'ceiling',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'819',
                    'keywordName'=>'child',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'820',
                    'keywordName'=>'circular',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'821',
                    'keywordName'=>'first',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'822',
                    'keywordName'=>'fit',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'823',
                    'keywordName'=>'hierarchy',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'824',
                    'keywordName'=>'clause',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'825',
                    'keywordName'=>'clique',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'826',
                    'keywordName'=>'closed-form',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'827',
                    'keywordName'=>'cluster',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'828',
                    'keywordName'=>'optimization',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'829',
                    'keywordName'=>'cohesion',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'830',
                    'keywordName'=>'Collatz',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'831',
                    'keywordName'=>'sequence',
                    'mainTermId' => '11',
              ]);
              
        DB::table('dictionaries')->insert([
              'keywordId'=>'832',
                    'keywordName'=>'oop',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'833',
                    'keywordName'=>'polymorphism',
                    'mainTermId' => '11',
              ]);
        
        DB::table('dictionaries')->insert([
              'keywordId'=>'834',
                    'keywordName'=>'pattern',
                    'mainTermId' => '11',
              ]);
              DB::table('dictionaries')->insert([

                'keywordId'=>'835',
                'keywordName'=>'Divide',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'836',
                'keywordName'=>'conquer',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'837',
                'keywordName'=>'Binary ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'838',
                'keywordName'=>'Dynamic',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'839',
                'keywordName'=>' programming',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'840',
                'keywordName'=>'Search',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'841',
                'keywordName'=>'Greedy ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'842',
                'keywordName'=>' algorithms',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'843',
                'keywordName'=>'Backtracking',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'845',
                'keywordName'=>'recurrence',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'846',
                'keywordName'=>'master',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'847',
                'keywordName'=>'method',
                'mainTermId' => '31',
                ]);
    
     DB::table('dictionaries')->insert([
    
                'keywordId'=>'848',
                'keywordName'=>'simple ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'849',
                'keywordName'=>'sorting',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'850',
                'keywordName'=>'bubble',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'851',
                'keywordName'=>'selection',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'852',
                'keywordName'=>'insertion ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'853',
                'keywordName'=>'merge',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'854',
                'keywordName'=>'counting',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'855',
                'keywordName'=>'lower',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'856',
                'keywordName'=>'bound ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'857',
                'keywordName'=>' theory',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'858',
                'keywordName'=>'sort',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'859',
                'keywordName'=>'Asymptotic',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'860',
                'keywordName'=>'Analysis',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'861',
                'keywordName'=>'Heap',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'862',
                'keywordName'=>'Quick',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'863',
                'keywordName'=>'Stable',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'864',
                'keywordName'=>'Linear',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'865',
                'keywordName'=>'Bucket',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'866',
                'keywordName'=>'Radix',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'867',
                'keywordName'=>'Hash ',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'868',
                'keywordName'=>'Tables',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'869',
                'keywordName'=>'Red',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'870',
                'keywordName'=>'Fibonacci ',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'871',
                'keywordName'=>'sequence',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'872',
                'keywordName'=>'Matrix ',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'873',
                'keywordName'=>'Chain',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'874',
                'keywordName'=>'Multiplication',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'875',
                'keywordName'=>'Fractional',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'876',
                'keywordName'=>'Knapsack',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'877',
                'keywordName'=>'Codes',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'878',
                'keywordName'=>'Huffman',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'879',
                'keywordName'=>'Relaxation',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'880',
                'keywordName'=>'Black',
                'mainTermId' => '31',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'881',
                'keywordName'=>'Tree',
                'mainTermId' => '31',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'882',
                'keywordName'=>'computer',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'883',
                'keywordName'=>'technology',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'884',
                'keywordName'=>'interfaces',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'885',
                'keywordName'=>'science',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'886',
                'keywordName'=>'behavioural',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'887',
                'keywordName'=>'graphical',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'888',
                'keywordName'=>'user ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'889',
                'keywordName'=>'embodied',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'890',
                'keywordName'=>'character ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'891',
                'keywordName'=>'agents',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'892',
                'keywordName'=>'multimodality',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'893',
                'keywordName'=>'Association ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'894',
                'keywordName'=>'Computing ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'895',
                'keywordName'=>'Machinery',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'896',
                'keywordName'=>'graphics',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'897',
                'keywordName'=>'operating ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'898',
                'keywordName'=>'systems' ,
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'899',
                'keywordName'=>'programming ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'900',
                'keywordName'=>'languages',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'901',
                'keywordName'=>'communication ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'902',
                'keywordName'=>'theory',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'903',
                'keywordName'=>'industrial ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'904',
                'keywordName'=>'design',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'905',
                'keywordName'=>'linguistics',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'906',
                'keywordName'=>'social ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'907',
                'keywordName'=>'psychology',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'908',
                'keywordName'=>'cognitive ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'909',
                'keywordName'=>'satisfaction',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'910',
                'keywordName'=>'human',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'911',
                'keywordName'=>'machine ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'912',
                'keywordName'=>'software',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'913',
                'keywordName'=>'libraries',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'914',
                'keywordName'=>'ethnomethodological ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'915',
                'keywordName'=>'management',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'916',
                'keywordName'=>'information ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'917',
                'keywordName'=>'Personal ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'918',
                'keywordName'=>'interactions',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'919',
                'keywordName'=>'participatory ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'920',
                'keywordName'=>'design',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'921',
                'keywordName'=>'access',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'922',
                'keywordName'=>'Affective ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'923',
                'keywordName'=>'Emotion ',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'924',
                'keywordName'=>'recognition',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'925',
                'keywordName'=>'Brain',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'926',
                'keywordName'=>'neuromodulation',
                'mainTermId' => '30',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'927',
                'keywordName'=>'Sociology',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'928',
                'keywordName'=>'economics ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'929',
                'keywordName'=>'Industrial ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'930',
                'keywordName'=>'Revolution ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'931',
                'keywordName'=>'iron ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'932',
                'keywordName'=>'cage  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'933',
                'keywordName'=>'scientific ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'934',
                'keywordName'=>'management ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'935',
                'keywordName'=>'legal ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'936',
                'keywordName'=>'rational',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'937',
                'keywordName'=>'Hawthorne ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'938',
                'keywordName'=>'Studies  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'939',
                'keywordName'=>'Effect  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'940',
                'keywordName'=>'bounded ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'941',
                'keywordName'=>'rationality ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'942',
                'keywordName'=>'satisficing  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'943',
                'keywordName'=>'quantitative ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'944',
                'keywordName'=>'institutional ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'945',
                'keywordName'=>'contingency ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'946',
                'keywordName'=>'theory  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'947',
                'keywordName'=>'organizational ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'948',
                'keywordName'=>'ecology ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'949',
                'keywordName'=>'anthropology ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'950',
                'keywordName'=>'psychology ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'951',
                'keywordName'=>'simulation ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'952',
                'keywordName'=>'computer ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'953',
                'keywordName'=>'cognition ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'954',
                'keywordName'=>'behavior ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'955',
                'keywordName'=>'Consulting ',
                'mainTermId' => '32',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'956',
                'keywordName'=>'Abusive ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'957',
                'keywordName'=>'supervision ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'958',
                'keywordName'=>'Incivility ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'959',
                'keywordName'=>'Leadership ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'960',
                'keywordName'=>'Motivation ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'961',
                'keywordName'=>'Personality ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'962',
                'keywordName'=>'culture ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'963',
                'keywordName'=>'Occupational ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'964',
                'keywordName'=>'stress  ',
                'mainTermId' => '32',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'965',
                'keywordName'=>'Bureaucracy ',
                'mainTermId' => '32',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'966',
                'keywordName'=>'machine ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'967',
                'keywordName'=>'code   ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'968',
                'keywordName'=>'processor ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'969',
                'keywordName'=>'word ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'970',
                'keywordName'=>'memory ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'971',
                'keywordName'=>'address ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'972',
                'keywordName'=>'modes ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'973',
                'keywordName'=>'registers ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'974',
                'keywordName'=>'data ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'975',
                'keywordName'=>'type ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'976',
                'keywordName'=>'virtualization ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'977',
                'keywordName'=>'multiprocessing ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'978',
                'keywordName'=>'assembly ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'979',
                'keywordName'=>'language ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'980',
                'keywordName'=>'compilers ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'981',
                'keywordName'=>'implementations  ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'982',
                'keywordName'=>'microarchitectures ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'983',
                'keywordName'=>'assembler ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'984',
                'keywordName'=>'Disassemblers   ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'985',
                'keywordName'=>'debuggers ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'986',
                'keywordName'=>'emulation ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'987',
                'keywordName'=>'multiplexers ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'988',
                'keywordName'=>'latches ',
                'mainTermId' => '24',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'989',
                'keywordName'=>'floorplan ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'990',
                'keywordName'=>'CPU ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'991',
                'keywordName'=>'design ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'992',
                'keywordName'=>'latency ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'993',
                'keywordName'=>'Superscalar ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'994',
                'keywordName'=>'Interrupt ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'995',
                'keywordName'=>'latency ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'996',
                'keywordName'=>'pipelining',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'997',
                'keywordName'=>'Benchmarking ',
                'mainTermId' => '24',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'998',
                'keywordName'=>'transistor',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'999',
                'keywordName'=>'functional ',
                'mainTermId' => '24',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1000',
                'keywordName'=> 'machine ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1001',
                'keywordName'=> 'Microcode ',
                'mainTermId' => '24',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1002',
                'keywordName'=>' units ',
                'mainTermId' => '24',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1003',
                'keywordName'=>'programming ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1004',
                'keywordName'=>' paradigm',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1005',
                'keywordName'=>'translation ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1006',
                'keywordName'=>' machine',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1007',
                'keywordName'=>'based ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1008',
                'keywordName'=>' Rule',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1009',
                'keywordName'=>'formal ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1010',
                'keywordName'=>'logic ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1011',
                'keywordName'=>' Prolog',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1012',
                'keywordName'=>'answer ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1013',
                'keywordName'=>'set ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1014',
                'keywordName'=>' Datalog',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1015',
                'keywordName'=>'atomic ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1016',
                'keywordName'=>' formulae',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1017',
                'keywordName'=>'Horn  ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1018',
                'keywordName'=>' clauses',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1019',
                'keywordName'=>' monotonic',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1020',
                'keywordName'=>'declarative ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1021',
                'keywordName'=>'procedural ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1022',
                'keywordName'=>'program ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1023',
                'keywordName'=>'transformation ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1024',
                'keywordName'=>'artificial ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1025',
                'keywordName'=>' intelligence',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1026',
                'keywordName'=>' Planner',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1027',
                'keywordName'=>'backward ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1028',
                'keywordName'=>' forward',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1029',
                'keywordName'=>'chaining ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1030',
                'keywordName'=>' SLD',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1031',
                'keywordName'=>' resolution',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1032',
                'keywordName'=>'Association ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1033',
                'keywordName'=>' concurrent',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1034',
                'keywordName'=>'constraint ',
                'mainTermId' => '25',
                ]);
          
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1035',
                'keywordName'=>' circumscription',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1036',
                'keywordName'=>' closed',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1037',
                'keywordName'=>' world ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1038',
                'keywordName'=>'assumption ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1039',
                'keywordName'=>'stable ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1040',
                'keywordName'=>'model  ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1041',
                'keywordName'=>'semantics ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1042',
                'keywordName'=>' negation',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1043',
                'keywordName'=>'situation ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1044',
                'keywordName'=>' calculus',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1045',
                'keywordName'=>'event  ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1046',
                'keywordName'=>'natural ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1047',
                'keywordName'=>'language ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1048',
                'keywordName'=>'understanding ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1049',
                'keywordName'=>'symbolic ',
                'mainTermId' => '25',
                ]);
          
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1050',
                'keywordName'=>'metalevel ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1051',
                'keywordName'=>'Inductive ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1052',
                'keywordName'=>'machine ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1053',
                'keywordName'=>'Object ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1054',
                'keywordName'=>'higher ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1055',
                'keywordName'=>' Transaction',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1056',
                'keywordName'=>'Linear ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1057',
                'keywordName'=>'oriented ',
                'mainTermId' => '25',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1058',
                'keywordName'=>'order ',
                'mainTermId' => '25',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1059',
                'keywordName'=>' computation ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1060',
                'keywordName'=>' processes',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1061',
                'keywordName'=>' instruction',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1062',
                'keywordName'=>'level  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1063',
                'keywordName'=>'bit ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1064',
                'keywordName'=>'data ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1065',
                'keywordName'=>'task ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1066',
                'keywordName'=>'parallelism ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1067',
                'keywordName'=>'frequency ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1068',
                'keywordName'=>'scaling ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1069',
                'keywordName'=>'computer  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1070',
                'keywordName'=>' architecture',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1071',
                'keywordName'=>'concurrent  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1072',
                'keywordName'=>'computing ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1073',
                'keywordName'=>' multi',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1074',
                'keywordName'=>'core  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1075',
                'keywordName'=>'processors ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1076',
                'keywordName'=>'concurrent ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1077',
                'keywordName'=>' computing',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1078',
                'keywordName'=>'time ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1079',
                'keywordName'=>'sharing ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1080',
                'keywordName'=>'distributed ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1081',
                'keywordName'=>'inter ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1082',
                'keywordName'=>'processing ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1083',
                'keywordName'=>'elements ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1084',
                'keywordName'=>'clusters ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1085',
                'keywordName'=>'MPPs ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1086',
                'keywordName'=>'grids ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1087',
                'keywordName'=>'parallel ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1088',
                'keywordName'=>'algorithms ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1089',
                'keywordName'=>'sequential ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1090',
                'keywordName'=>'software ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1091',
                'keywordName'=>'bugs ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1092',
                'keywordName'=>'race ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1093',
                'keywordName'=>'conditions ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1094',
                'keywordName'=>'synchronization ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1095',
                'keywordName'=>'upperbound ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1096',
                'keywordName'=>'meteorology ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1097',
                'keywordName'=>'speed ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1098',
                'keywordName'=>'compute ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1099',
                'keywordName'=>' bound',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1100',
                'keywordName'=>' capacitance',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1101',
                'keywordName'=>' desktop',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1102',
                'keywordName'=>'operating ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1103',
                'keywordName'=>'system ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1104',
                'keywordName'=>' data',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1105',
                'keywordName'=>'dependencies ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1106',
                'keywordName'=>'critical ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1107',
                'keywordName'=>'path ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1108',
                'keywordName'=>'threads ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1109',
                'keywordName'=>'fibers ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1110',
                'keywordName'=>'variable ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1111',
                'keywordName'=>'mutual ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1112',
                'keywordName'=>'exclusion ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1113',
                'keywordName'=>'critical  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1114',
                'keywordName'=>' section',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1115',
                'keywordName'=>'locked  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1116',
                'keywordName'=>'out ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1117',
                'keywordName'=>'reliability ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1118',
                'keywordName'=>'deadlock ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1119',
                'keywordName'=>'atomic ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1120',
                'keywordName'=>'slowdown ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1121',
                'keywordName'=>' transactional ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1122',
                'keywordName'=>'memory ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1123',
                'keywordName'=>'database ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1124',
                'keywordName'=>'Calculus ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1125',
                'keywordName'=>' Communicating',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1126',
                'keywordName'=>'Petrinets ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1127',
                'keywordName'=>' Actor',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1128',
                'keywordName'=>'event ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1129',
                'keywordName'=>'diagrams',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1130',
                'keywordName'=>'word ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1131',
                'keywordName'=>' size',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1132',
                'keywordName'=>'integration ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1133',
                'keywordName'=>'scale ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1134',
                'keywordName'=>'shared ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1135',
                'keywordName'=>' uniform',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1136',
                'keywordName'=>'non ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1137',
                'keywordName'=>'access ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1138',
                'keywordName'=>'topologies ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1139',
                'keywordName'=>'routing ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1140',
                'keywordName'=>'Beowulf  ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1141',
                'keywordName'=>'cluster ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1142',
                'keywordName'=>'commercial ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1143',
                'keywordName'=>'BrookGPU ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1144',
                'keywordName'=>'PeakStream ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1145',
                'keywordName'=>'RapidMind ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1146',
                'keywordName'=>'photolithograph ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1147',
                'keywordName'=>'UV ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1148',
                'keywordName'=>'Vector ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1149',
                'keywordName'=>'Automatic ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1150',
                'keywordName'=>'parallelization ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1151',
                'keywordName'=>'Application ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1152',
                'keywordName'=>'checkpointing ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1153',
                'keywordName'=>'system ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1154',
                'keywordName'=>'tolerant ',
                'mainTermId' => '23',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1155',
                'keywordName'=>'Fault ',
                'mainTermId' => '23',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1156',
                'keywordName'=>'paradigm ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1157',
                'keywordName'=>' programmers',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1158',
                'keywordName'=>'C++ ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1159',
                'keywordName'=>'C# ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1160',
                'keywordName'=>' Java',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1161',
                'keywordName'=>'Modula ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1162',
                'keywordName'=>'Delphi ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1163',
                'keywordName'=>' Ada',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1164',
                'keywordName'=>' Eiffel',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1165',
                'keywordName'=>'VB.Net ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1166',
                'keywordName'=>' Python',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1167',
                'keywordName'=>'Smalltalk ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1168',
                'keywordName'=>'inheritance ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1169',
                'keywordName'=>'encapsulation ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1170',
                'keywordName'=>'operations ',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1171',
                'keywordName'=>' Abstraction',
                'mainTermId' => '22',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1172',
                'keywordName'=>'Polymorphism ',
                'mainTermId' => '22',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1173',
                'keywordName'=>' Project',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1174',
                'keywordName'=>' management',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1175',
                'keywordName'=>'Estimation ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1176',
                'keywordName'=>'feasibility ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1177',
                'keywordName'=>' scheduling',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1178',
                'keywordName'=>' manager',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1179',
                'keywordName'=>'planning ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1180',
                'keywordName'=>'organization ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1181',
                'keywordName'=>'opportunities ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1182',
                'keywordName'=>' operations',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1183',
                'keywordName'=>'problem ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1184',
                'keywordName'=>' definition',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1185',
                'keywordName'=>' productivity',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1186',
                'keywordName'=>' requirements',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1187',
                'keywordName'=>' constraints',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1188',
                'keywordName'=>' management',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1189',
                'keywordName'=>'feasibility ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1190',
                'keywordName'=>'software ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1191',
                'keywordName'=>'package ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1192',
                'keywordName'=>'modules ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1193',
                'keywordName'=>'architecture ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1194',
                'keywordName'=>'components ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1195',
                'keywordName'=>'interfaces ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1196',
                'keywordName'=>'Flowchart ',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1197',
                'keywordName'=>'Logical',
                'mainTermId' => '28',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1198',
                'keywordName'=>'Physical ',
                'mainTermId' => '28',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1199',
                'keywordName'=>' Cache ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1200',
                'keywordName'=>'Memory ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1201',
                'keywordName'=>' Register',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1202',
                'keywordName'=>' Accumulator',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1203',
                'keywordName'=>'Peripheral ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1204',
                'keywordName'=>'High ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1205',
                'keywordName'=>'Level  ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1206',
                'keywordName'=>'Language ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1207',
                'keywordName'=>'Low ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1208',
                'keywordName'=>'Machine ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1209',
                'keywordName'=>'Code ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1210',
                'keywordName'=>'Assembly ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1211',
                'keywordName'=>'Syntax ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1212',
                'keywordName'=>'Compiler ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1213',
                'keywordName'=>'Interpreter ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1214',
                'keywordName'=>'Source ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1215',
                'keywordName'=>'Executable ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1216',
                'keywordName'=>'File ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1217',
                'keywordName'=>'Mnemonic ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1218',
                'keywordName'=>'Assembler ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1219',
                'keywordName'=>'Driver ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1220',
                'keywordName'=>' hardware',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1221',
                'keywordName'=>'computer ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1222',
                'keywordName'=>'cpu ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1223',
                'keywordName'=>'supercomputer ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1224',
                'keywordName'=>'science ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1225',
                'keywordName'=>'computerize ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1226',
                'keywordName'=>'natural ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1227',
                'keywordName'=>'network ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1228',
                'keywordName'=>'laptop ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1229',
                'keywordName'=>'techie ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1230',
                'keywordName'=>'mac ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1231',
                'keywordName'=>'risc ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1232',
                'keywordName'=>'information ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1233',
                'keywordName'=>'cisc ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1234',
                'keywordName'=>'engineering ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1235',
                'keywordName'=>' processor',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1236',
                'keywordName'=>'mini ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1237',
                'keywordName'=>' micro',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1238',
                'keywordName'=>'motherboard ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1239',
                'keywordName'=>'cyberintrusion ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1240',
                'keywordName'=>'computing ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1241',
                'keywordName'=>'cybersystem ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1242',
                'keywordName'=>'vm ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1243',
                'keywordName'=>'neuro ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1244',
                'keywordName'=>'telnet ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1245',
                'keywordName'=>'softmodem ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1246',
                'keywordName'=>' pre',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1247',
                'keywordName'=>'puter ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1248',
                'keywordName'=>'computerist ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1249',
                'keywordName'=>'computerology ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1250',
                'keywordName'=>'nanocomputer ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1251',
                'keywordName'=>' noncomputer',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1252',
                'keywordName'=>'computerdom ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1253',
                'keywordName'=>'computernik ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1254',
                'keywordName'=>'computeritis ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1255',
                'keywordName'=>'multinetworked ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1256',
                'keywordName'=>'multinetwork ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1257',
                'keywordName'=>'compy ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1258',
                'keywordName'=>'mainframe ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1259',
                'keywordName'=>'cybernetic ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1260',
                'keywordName'=>'hostmaster ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1261',
                'keywordName'=>'bios ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1262',
                'keywordName'=>'computerbased ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1263',
                'keywordName'=>'cybernetwork ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1264',
                'keywordName'=>' screensaver',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1265',
                'keywordName'=>'ibook ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1266',
                'keywordName'=>'computerism ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1267',
                'keywordName'=>'cybersociology ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1268',
                'keywordName'=>'compute ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1269',
                'keywordName'=>'telecommuter ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1270',
                'keywordName'=>'cybersavvy ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1271',
                'keywordName'=>'pseudocode ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1272',
                'keywordName'=>'cyberinteraction ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1273',
                'keywordName'=>'computerlike ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1274',
                'keywordName'=>'appender ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1275',
                'keywordName'=>'cyberterrorism ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1276',
                'keywordName'=>'computercide ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1277',
                'keywordName'=>'cyberjunkie ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1278',
                'keywordName'=>'telecomputer ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1279',
                'keywordName'=>'cyberpsychology ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1280',
                'keywordName'=>'pda ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1281',
                'keywordName'=>'cybertechnology ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1282',
                'keywordName'=>'login ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1283',
                'keywordName'=>'cyberjargon ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1284',
                'keywordName'=>'pessimize ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1285',
                'keywordName'=>'netzine ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1286',
                'keywordName'=>'wardialer ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1287',
                'keywordName'=>'downloader ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1288',
                'keywordName'=>'uploader ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1289',
                'keywordName'=>'aid  ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1290',
                'keywordName'=>'digital ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1291',
                'keywordName'=>' design',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1292',
                'keywordName'=>'antivirus ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1293',
                'keywordName'=>'cyberphilosophy ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1294',
                'keywordName'=>'organize ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1295',
                'keywordName'=>'information ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1296',
                'keywordName'=>'computational ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1297',
                'keywordName'=>'teletype ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1298',
                'keywordName'=>'biocomputiong ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1299',
                'keywordName'=>'cybergeneration ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1300',
                'keywordName'=>' clip',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1301',
                'keywordName'=>'wave ',
                'mainTermId' => '33',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1302',
                'keywordName'=>'converter ',
                'mainTermId' => '33',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1303',
                'keywordName'=>' java',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1304',
                'keywordName'=>'c ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1305',
                'keywordName'=>'perl ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1306',
                'keywordName'=>'compiler ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1307',
                'keywordName'=>'c++ ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1308',
                'keywordName'=>'algorithm ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1309',
                'keywordName'=>'assembly  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1310',
                'keywordName'=>'language ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1311',
                'keywordName'=>'syntax ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1312',
                'keywordName'=>'instruction  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1313',
                'keywordName'=>'set ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1314',
                'keywordName'=>' architecture',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1315',
                'keywordName'=>'computer ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1316',
                'keywordName'=>'domain  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1317',
                'keywordName'=>'specific  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1318',
                'keywordName'=>'type ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1319',
                'keywordName'=>'system ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1320',
                'keywordName'=>'imperative ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1321',
                'keywordName'=>'declarative ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1322',
                'keywordName'=>'implementation ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1323',
                'keywordName'=>'reference ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1324',
                'keywordName'=>' computer',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1325',
                'keywordName'=>'program ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1326',
                'keywordName'=>'fortran ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1327',
                'keywordName'=>'cobal ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1328',
                'keywordName'=>'high-level ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1329',
                'keywordName'=>'ada ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1330',
                'keywordName'=>'ml ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1331',
                'keywordName'=>'python ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1332',
                'keywordName'=>'javascript ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1333',
                'keywordName'=>'lisp ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1334',
                'keywordName'=>' edsger',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1335',
                'keywordName'=>'semantics ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1336',
                'keywordName'=>'xml ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1337',
                'keywordName'=>'html ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1338',
                'keywordName'=>'xslt ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1339',
                'keywordName'=>'input ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1340',
                'keywordName'=>'latex ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1341',
                'keywordName'=>' primitive',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1342',
                'keywordName'=>' troff',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1343',
                'keywordName'=>' forth',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1344',
                'keywordName'=>'autocode ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1345',
                'keywordName'=>'formal ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1346',
                'keywordName'=>'goto ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1347',
                'keywordName'=>'context ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1348',
                'keywordName'=>'free ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1349',
                'keywordName'=>'grammar ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1350',
                'keywordName'=>'pascal ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1351',
                'keywordName'=>'machine ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1352',
                'keywordName'=>'edsac ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1353',
                'keywordName'=>'general ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1354',
                'keywordName'=>'purpose  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1355',
                'keywordName'=>'jacquard  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1356',
                'keywordName'=>'internet ',
                'mainTermId' => '34',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1357',
                'keywordName'=>'music ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1358',
                'keywordName'=>'player ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1359',
                'keywordName'=>'website ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1360',
                'keywordName'=>'smalltalk ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1361',
                'keywordName'=>'international ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1362',
                'keywordName'=>'organization ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1363',
                'keywordName'=>'standardization ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1364',
                'keywordName'=>'delegation ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1365',
                'keywordName'=>'flow ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1366',
                'keywordName'=>'matic ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1367',
                'keywordName'=>' aimaco',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1368',
                'keywordName'=>'markup ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1369',
                'keywordName'=>'structured ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1370',
                'keywordName'=>'turing ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1371',
                'keywordName'=>'formal ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1372',
                'keywordName'=>'specification ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1373',
                'keywordName'=>' type',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1374',
                'keywordName'=>'inference ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1375',
                'keywordName'=>'colossus ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1376',
                'keywordName'=>'stored  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1377',
                'keywordName'=>'theory ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1378',
                'keywordName'=>'machine  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1379',
                'keywordName'=>'punched ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1380',
                'keywordName'=>'magnetic  ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1381',
                'keywordName'=>'tape ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1382',
                'keywordName'=>'front ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1383',
                'keywordName'=>' panel',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1384',
                'keywordName'=>'first ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1385',
                'keywordName'=>'generation ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1386',
                'keywordName'=>'second ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1387',
                'keywordName'=>'third ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1388',
                'keywordName'=>'identifier ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1389',
                'keywordName'=>' mixin',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1390',
                'keywordName'=>'subroutine ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1391',
                'keywordName'=>'logic ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1391',
                'keywordName'=>'short ',
                'mainTermId' => '34',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1392',
                'keywordName'=>'electronic ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1393',
                'keywordName'=>'statement ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1394',
                'keywordName'=>'grace ',
                'mainTermId' => '34',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1395',
                'keywordName'=>'hopper ',
                'mainTermId' => '34',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1396',
                'keywordName'=>'hypertext ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1397',
                'keywordName'=>'transfer ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1398',
                'keywordName'=>' protocol',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1399',
                'keywordName'=>'web ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1400',
                'keywordName'=>'browser ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1401',
                'keywordName'=>'server ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1402',
                'keywordName'=>'page ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1403',
                'keywordName'=>'html ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1404',
                'keywordName'=>'htpertext ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1405',
                'keywordName'=>'internet ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1406',
                'keywordName'=>'javascript ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1407',
                'keywordName'=>'hyperlink ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1408',
                'keywordName'=>'resource ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1409',
                'keywordName'=>'application ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1410',
                'keywordName'=>'url ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1411',
                'keywordName'=>'http ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1412',
                'keywordName'=>'markup ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1413',
                'keywordName'=>'language ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1414',
                'keywordName'=>'ip  ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1415',
                'keywordName'=>'address ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1416',
                'keywordName'=>'client ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1417',
                'keywordName'=>'scripting ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1418',
                'keywordName'=>'cascading ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1419',
                'keywordName'=>'image ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1420',
                'keywordName'=>'user ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1421',
                'keywordName'=>' multimedia',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1422',
                'keywordName'=>'ajax ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1423',
                'keywordName'=>'style ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1424',
                'keywordName'=>'software ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1425',
                'keywordName'=>'application ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1426',
                'keywordName'=>'tim berners-lee ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1427',
                'keywordName'=>'  page',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1428',
                'keywordName'=>'static',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1429',
                'keywordName'=>'web',
                'mainTermId' => '35',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1430',
                'keywordName'=>' content',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1431',
                'keywordName'=>' text',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1432',
                'keywordName'=>'plain ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1433',
                'keywordName'=>' system',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1434',
                'keywordName'=>'domain ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1435',
                'keywordName'=>'name',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1436',
                'keywordName'=>' locator',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1437',
                'keywordName'=>'uniform ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1438',
                'keywordName'=>'resource',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1439',
                'keywordName'=>' consortium',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1440',
                'keywordName'=>'semantic',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1441',
                'keywordName'=>'firefox ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1442',
                'keywordName'=>' identifier',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1443',
                'keywordName'=>'uniform ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1444',
                'keywordName'=>'resource',
                'mainTermId' => '35',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1445',
                'keywordName'=>'engine',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1446',
                'keywordName'=>'browser ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1447',
                'keywordName'=>'neworking',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1448',
                'keywordName'=>'social ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1449',
                'keywordName'=>'scripting ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1450',
                'keywordName'=>' language',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1451',
                'keywordName'=>'video ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1452',
                'keywordName'=>'website ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1453',
                'keywordName'=>'enquire ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1454',
                'keywordName'=>'wiki ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1455',
                'keywordName'=>'blog ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1456',
                'keywordName'=>'rss ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1457',
                'keywordName'=>'atom ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1458',
                'keywordName'=>'sgml ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1459',
                'keywordName'=>'newsgroup ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1460',
                'keywordName'=>'spires ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1461',
                'keywordName'=>'nls ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1462',
                'keywordName'=>'microfilm ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1463',
                'keywordName'=>' hypermedia',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1464',
                'keywordName'=>'unix ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1465',
                'keywordName'=>'webdav ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1466',
                'keywordName'=>'secure ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1467',
                'keywordName'=>'mosaic ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1468',
                'keywordName'=>'dynatext ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1469',
                'keywordName'=>'hytime ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1470',
                'keywordName'=>'wide ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1471',
                'keywordName'=>'conflation ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1472',
                'keywordName'=>'synonym ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1473',
                'keywordName'=>'google ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1474',
                'keywordName'=>' memex',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1475',
                'keywordName'=>' hypercard',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1476',
                'keywordName'=>'parsing ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1477',
                'keywordName'=>'violawww ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1478',
                'keywordName'=>'information ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1479',
                'keywordName'=>' cornerstone',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1480',
                'keywordName'=>'information ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1481',
                'keywordName'=>'inria ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1482',
                'keywordName'=>' formatted ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1483',
                'keywordName'=>'text ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1484',
                'keywordName'=>'scripting',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1485',
                'keywordName'=>'server',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1486',
                'keywordName'=>'side ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1487',
                'keywordName'=>'semantics ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1488',
                'keywordName'=>'navigation ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1489',
                'keywordName'=>'audio  ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1490',
                'keywordName'=>'signal ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1491',
                'keywordName'=>'tcp ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1492',
                'keywordName'=>'ip ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1493',
                'keywordName'=>' content',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1494',
                'keywordName'=>'usage',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1495',
                'keywordName'=>'global ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1496',
                'keywordName'=>'usenet ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1497',
                'keywordName'=>' address',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1498',
                'keywordName'=>'lynx ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1499',
                'keywordName'=>'robert cailliau',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1500',
                'keywordName'=>'client server ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1501',
                'keywordName'=>'gmail ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1502',
                'keywordName'=>'myspace ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1503',
                'keywordName'=>'facebook ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1504',
                'keywordName'=>'twitter ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1505',
                'keywordName'=>'computer',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1506',
                'keywordName'=>'fieldset ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1507',
                'keywordName'=>'editor',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1508',
                'keywordName'=>'html',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1509',
                'keywordName'=>'paul jones',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1510',
                'keywordName'=>'unc-chapel hill',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1511',
                'keywordName'=>'magneto optical ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1512',
                'keywordName'=>' camelcase',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1513',
                'keywordName'=>'webgraph ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1514',
                'keywordName'=>'les horribles cernettes',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1515',
                'keywordName'=>'hypertext ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1516',
                'keywordName'=>'ted nelson',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1517',
                'keywordName'=>'hostname ',
                'mainTermId' => '35',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1518',
                'keywordName'=>'project xanadu',
                'mainTermId' => '35',
                ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1519',
                'keywordName'=>'massively parallel',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([  
    
                'keywordId'=>'1520',
                'keywordName'=>'linux ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1521',
                'keywordName'=>'gpgpu ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1522',
                'keywordName'=>'exascale',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1523',
                'keywordName'=>'flops ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1524',
                'keywordName'=>' fluorinert',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1525',
                'keywordName'=>'cooling',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1526',
                'keywordName'=>'message passing ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1527',
                'keywordName'=>'grid computing',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1528',
                'keywordName'=>' top500',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1529',
                'keywordName'=>'cryptanalysis ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1530',
                'keywordName'=>'mbps',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1531',
                'keywordName'=>'european union',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1532',
                'keywordName'=>'cray-1 ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1533',
                'keywordName'=>'weather forecasting',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1534',
                'keywordName'=>'seymour cray',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1535',
                'keywordName'=>' unit',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1536',
                'keywordName'=>'microprocessor ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1537',
                'keywordName'=>'central processing ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1538',
                'keywordName'=>'supercomputer architecture',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1539',
                'keywordName'=>'blue gene',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1540',
                'keywordName'=>'infiniband ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1541',
                'keywordName'=>' computer',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1542',
                'keywordName'=>'crossbar switch',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1543',
                'keywordName'=>'macromolecules ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1544',
                'keywordName'=>'aerodynamics ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1545',
                'keywordName'=>'floating-point',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1546',
                'keywordName'=>'summit ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1547',
                'keywordName'=>'univac ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1548',
                'keywordName'=>'pipeline ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1549',
                'keywordName'=>'atlas ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1550',
                'keywordName'=>'swapping ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1551',
                'keywordName'=>'ferranti ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1552',
                'keywordName'=>'germanium ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1553',
                'keywordName'=>'silicon ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1554',
                'keywordName'=>'fugaku ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1555',
                'keywordName'=>'cray ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1556',
                'keywordName'=>'ibm ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1557',
                'keywordName'=>'mit ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1558',
                'keywordName'=>'time-sharing',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1559',
                'keywordName'=>'united states',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1560',
                'keywordName'=>'gaas ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1561',
                'keywordName'=>'fujitsu ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1562',
                'keywordName'=>'cray-2',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1563',
                'keywordName'=>'chemistry',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1564',
                'keywordName'=>'computational',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1565',
                'keywordName'=>'corporation',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1566',
                'keywordName'=>'data ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1567',
                'keywordName'=>'research',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1568',
                'keywordName'=>'cray ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1569',
                'keywordName'=>'science ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1570',
                'keywordName'=>'computational  ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1571',
                'keywordName'=>'mechanics',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1572',
                'keywordName'=>'quantum',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1573',
                'keywordName'=>'gigaflops ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1574',
                'keywordName'=>'climate ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1575',
                'keywordName'=>'parallel ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1576',
                'keywordName'=>'iapx ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1577',
                'keywordName'=>'benchmark ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1578',
                'keywordName'=>'linpack  ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1579',
                'keywordName'=>'sparc ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1580',
                'keywordName'=>'memory ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1581',
                'keywordName'=>'drum ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1582',
                'keywordName'=>' drive',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1583',
                'keywordName'=>'disk ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1584',
                'keywordName'=>'design',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1585',
                'keywordName'=>'therminal ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1586',
                'keywordName'=>' mimd',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1587',
                'keywordName'=>'ibm 7030 stretch',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1588',
                'keywordName'=>'transistor ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1589',
                'keywordName'=>'maspar ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1590',
                'keywordName'=>'ibm 7950 harvest',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1591',
                'keywordName'=>'tom kilburn',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1592',
                'keywordName'=>'operating ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1593',
                'keywordName'=>'cdc 6600',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1594',
                'keywordName'=>'petaflops',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1595',
                'keywordName'=>'tianhe-i',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1596',
                'keywordName'=>'illiac iv',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1597',
                'keywordName'=>'connection',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1598',
                'keywordName'=>'network',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1599',
                'keywordName'=>'supercomputing ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1600',
                'keywordName'=>'mdgrape-3',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1601',
                'keywordName'=>'zilog z8000',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1602',
                'keywordName'=>'iapx 86',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1603',
                'keywordName'=>' unit',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1604',
                'keywordName'=>'floating',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1605',
                'keywordName'=>'point',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1606',
                'keywordName'=>'graphics',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1607',
                'keywordName'=>'tianhe-1a',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1608',
                'keywordName'=>'intel paragon',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1609',
                'keywordName'=>'intel i860',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1610',
                'keywordName'=>'liebert ',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1611',
                'keywordName'=>'intel ipsc',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1612',
                'keywordName'=>'mpp',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1613',
                'keywordName'=>'goodyear',
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1614',
                'keywordName'=>'cluster',
                'mainTermId' => '37',
                  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1615',
                'keywordName'=>'interconnect',
                'mainTermId' => '37',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1616',
                'keywordName'=>'torus ',
                'mainTermId' => '37',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1617',
                'keywordName'=>'processor',
                'mainTermId' => '37',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1618',
                'keywordName'=>'multi-core ',
                'mainTermId' => '37',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1619',
                'keywordName'=>'k computer',
                'mainTermId' => '37',
                   ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1620',
                'keywordName'=>'cloud ',
                'mainTermId' => '37',
                   ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1621',
                'keywordName'=>' supercomputer', 
                'mainTermId' => '37',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1622',
                'keywordName'=>'i/o',
                'mainTermId' => '37',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1623',
                'keywordName'=>'server ', 
                'mainTermId' => '37',
                  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1624',
                'keywordName'=>'ibm deep blue', 
                'mainTermId' => '37',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1625',
                'keywordName'=>'virtualization',
                'mainTermId' => '37',
            ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1626',
                'keywordName'=>'gravity pipe', 
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1627',
                'keywordName'=>'deep crack', 
                'mainTermId' => '37',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1628',
                'keywordName'=>'ethernet', 
                'mainTermId' => '37',
               ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1629',
                'keywordName'=>'lenovo', 
                'mainTermId' => '37',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1630',
                'keywordName'=>'provisioning',
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1631',
                'keywordName'=>'administrator', 
                'mainTermId' => '40',
                  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1632',
                'keywordName'=>'system ', 
                'mainTermId' => '40',
                      ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1633',
                'keywordName'=>'network', 
                'mainTermId' => '40',
                  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1634',
                'keywordName'=>'computer ', 
                'mainTermId' => '40',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1635',
                'keywordName'=>'xml',
                'mainTermId' => '40',
               ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1636',
                'keywordName'=>'service', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1637',
                'keywordName'=>'quality', 
                'mainTermId' => '40',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1638',
                'keywordName'=>'administrator', 
                'mainTermId' => '40',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1639',
                'keywordName'=>'network', 
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1640',
                'keywordName'=>'network ', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1641',
                'keywordName'=>' protocol', 
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1642',
                'keywordName'=>' interface',
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1643',
                'keywordName'=>'command-line',
                'mainTermId' => '40',
           ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1644',
                'keywordName'=>'corba', 
                'mainTermId' => '40',
            ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1645',
                'keywordName'=>'protocol', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1646',
                'keywordName'=>'information', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1647',
                'keywordName'=>'netconf',
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1648',
                'keywordName'=>' instrumentation', 
                'mainTermId' => '40',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1649',
                'keywordName'=>'language 1',
                'mainTermId' => '40',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1650',
                'keywordName'=>'transaction ',
                'mainTermId' => '40',
            ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1651',
                'keywordName'=>'mtosi', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1652',
                'keywordName'=>'java ', 
                'mainTermId' => '40',
                  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1653',
                'keywordName'=>' information', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1654',
                'keywordName'=>' management', 
                'mainTermId' => '40',
               ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1655',
                'keywordName'=>'web-based ', 
                'mainTermId' => '40',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1657',
                'keywordName'=>' model', 
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1658',
                'keywordName'=>'cim schema', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1659',
                'keywordName'=>'server', 
                'mainTermId' => '40',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1660',
                'keywordName'=>'security', 
                'mainTermId' => '40',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1661',
                'keywordName'=>'multi-user',
                'mainTermId' => '40',
            ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1662',
                'keywordName'=>'user',
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1663',
                'keywordName'=>'budget',
                'mainTermId' =>'40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1664',
                'keywordName'=>'uptime',
                'mainTermId' => '40',
            ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1665',
                'keywordName'=>'upgrade',
                'mainTermId' =>'40',
           ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1666',
                'keywordName'=>'troubleshoot', 
                'mainTermId' =>'40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1667',
                'keywordName'=>'systems', 
                'mainTermId' => '40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1668',
                'keywordName'=>'performance', 
                'mainTermId' => '40',
               ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1669',
                'keywordName'=>'resource', 
                'mainTermId' =>'40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1670',
                'keywordName'=>'mcse',
                'mainTermId' =>'40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1671',
                'keywordName'=>'mcitp',
                'mainTermId' =>'40',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1672',
                'keywordName'=>'technical ', 
                'mainTermId' =>'40',
              ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1673',
                'keywordName'=>'science ', 
                'mainTermId' => '40',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1674',
                'keywordName'=>'technology', 
                'mainTermId' => '40',
               ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1675',
                'keywordName'=>'ccna', 
                'mainTermId' => '40',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1676',
                'keywordName'=>'comptia', 
                'mainTermId' =>'40',
             ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1677',
                'keywordName'=>'engineering', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1678',
                'keywordName'=>'open-source ', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1679',
                'keywordName'=>'network+', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1680',
                'keywordName'=>'troubleshooting', 
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1681',
                'keywordName'=>'microsoft', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1682',
                'keywordName'=>'internet',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1683',
                'keywordName'=>'firewall',
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1684',
                'keywordName'=>' certification', 
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1685',
                'keywordName'=>'sun certified', 
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1686',
                'keywordName'=>'administrator', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1687',
                'keywordName'=>'linux ',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1688',
                'keywordName'=>'operating ', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1689',
                'keywordName'=>' application', 
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1690',
                'keywordName'=>'solving', 
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1691',
                'keywordName'=>'programming ', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1692',
                'keywordName'=>'scripting ', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1693',
                'keywordName'=>'engineer', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1694',
                'keywordName'=>'development', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1695',
                'keywordName'=>'detection ',
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1696',
                'keywordName'=>'intrusion ',
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1697',
                'keywordName'=>'quality', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1698',
                'keywordName'=>'writer',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1699',
                'keywordName'=>'architect',
                'mainTermId' =>'40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1700',
                'keywordName'=>'engineering',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1701',
                'keywordName'=>'design', 
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1702',
                'keywordName'=>'administrator',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1703',
                'keywordName'=>'database',
                'mainTermId' => '40',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1704',
                'keywordName'=>'absolute',
                'mainTermId' => '40',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1705',
                'keywordName'=>'data mining', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1706',
                'keywordName'=>'statistics',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1707',
                'keywordName'=>'computer vision', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1708',
                'keywordName'=>'unsupervised learning',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1709',
                'keywordName'=>'deep learning', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1710',
                'keywordName'=>'supervised learning', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1711',
                'keywordName'=>'artificial intelligence', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1712',
                'keywordName'=>'mathematical optimization', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1713',
                'keywordName'=>'training data', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1714',
                'keywordName'=>'connectionism', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1715',
                'keywordName'=>'probability theory', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1716',
                'keywordName'=>'medical diagnosis', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1717',
                'keywordName'=>'overfitting', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1718',
                'keywordName'=>'loss function', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1719',
                'keywordName'=>'brain',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1720',
                'keywordName'=>'statistical classification', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1721',
                'keywordName'=>'heuristic',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1722',
                'keywordName'=>'genetic algorithm', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1723',
                'keywordName'=>'discipline',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1724',
                'keywordName'=>'ibmer',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1725',
                'keywordName'=>'discovery', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1726',
                'keywordName'=>'bioinformatics', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1727',
                'keywordName'=>'perceptron',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1728',
                'keywordName'=>'adaline',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1729',
                'keywordName'=>'sample', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1730',
                'keywordName'=>'gofai',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1731',
                'keywordName'=>'backpropaggation',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1732',
                'keywordName'=>'matrix',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1733',
                'keywordName'=>'mathematical model', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1734',
                'keywordName'=>'ranking',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1735',
                'keywordName'=>'email filtering', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1736',
                'keywordName'=>'computational statistics', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1737',
                'keywordName'=>'exploratory', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1738',
                'keywordName'=>'predictive analytics',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1739',
                'keywordName'=>'topic modeling', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1740',
                'keywordName'=>'dimensionality reduction', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1741',
                'keywordName'=>'meta learning', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1742',
                'keywordName'=>'arthur samuel', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1743',
                'keywordName'=>'computer gaming', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1744',
                'keywordName'=>'operational definition', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1745',
                'keywordName'=>'alan turing', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1746',
                'keywordName'=>'intelligence',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1747',
                'keywordName'=>'neural network', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1748',
                'keywordName'=>'generalized linear', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1749',
                'keywordName'=>'speech recognition', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1750',
                'keywordName'=>'expert system', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1751',
                'keywordName'=>'inductive ', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1752',
                'keywordName'=>'pattern recognition',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1753',
                'keywordName'=>'tensor',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1754',
                'keywordName'=>'information retrival', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1755',
                'keywordName'=>'computer science', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1756',
                'keywordName'=>'john hopfield', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1757',
                'keywordName'=>'knowledge discovery', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1758',
                'keywordName'=>'autoencoder',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1759',
                'keywordName'=>'statistical inference', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1760',
                'keywordName'=>'pricing', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1761',
                'keywordName'=>'data science', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1762',
                'keywordName'=>'random forest',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1763',
                'keywordName'=>'computational learning theory', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1764',
                'keywordName'=>'errors and residuals', 
                'mainTermId' => '10',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1765',
                'keywordName'=>'time complexity', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1766',
                'keywordName'=>'piecewise',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1767',
                'keywordName'=>'array data structure', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1768',
                'keywordName'=>'active learning', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1769',
                'keywordName'=>'regression analysis', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1770',
                'keywordName'=>'similarity learning', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1771',
                'keywordName'=>'recommendation systems', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1772',
                'keywordName'=>'density estimation',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1773',
                'keywordName'=>'weak supervision', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1774',
                'keywordName'=>'control theory',
                'mainTermId' => '10',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1775',
                'keywordName'=>'game theory',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1776',
                'keywordName'=>'simulation-based optimization', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1777',
                'keywordName'=>'swarm intelligence', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1778',
                'keywordName'=>'entailment',
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1779',
                'keywordName'=>'feature engineering', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1780',
                'keywordName'=>'dynamic programming', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1781',
                'keywordName'=>'multilayer perceptron', 
                'mainTermId' => '10',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1782',
                'keywordName'=>'dictionary learning', 
                'mainTermId' => '10',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1783',
                'keywordName'=>'propulsion', 
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1784',
                'keywordName'=>'jet ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1785',
                'keywordName'=>' laboratory', 
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1786',
                'keywordName'=>'algorithm',
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1787',
                'keywordName'=>'fabrication',
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1788',
                'keywordName'=>'noise',
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1789',
                'keywordName'=>'distortion',
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1790',
                'keywordName'=>'mosfet',
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1791',
                'keywordName'=>'wirephoto', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1792',
                'keywordName'=>'videophone', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1793',
                'keywordName'=>'metal',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1794',
                'keywordName'=>'semiconductor', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1795',
                'keywordName'=>'digital ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1796',
                'keywordName'=>'analog ', 
                'mainTermId' => '38',
     ]);
    
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1797',
                'keywordName'=>'cosine ', 
                 'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1798',
                'keywordName'=>'bell ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1799',
                'keywordName'=>'laboratories',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1800',
                'keywordName'=>'transform',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1801',
                'keywordName'=>'general',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1802',
                'keywordName'=>'purpose',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1803',
                'keywordName'=>'jpeg',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1804',
                'keywordName'=>'internet',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1805',
                'keywordName'=>' device', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1806',
                'keywordName'=>'charge', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1807',
                'keywordName'=>'cmos ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1808',
                'keywordName'=>'microprocessors',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1809',
                'keywordName'=>'microcontrollers', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1810',
                'keywordName'=>'encoding',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1811',
                'keywordName'=>'active',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1812',
                'keywordName'=>' sensor',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1813',
                'keywordName'=>'multiplexing',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1814',
                'keywordName'=>'signaling',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1815',
                'keywordName'=>'luminance',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1816',
                'keywordName'=>'eric ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1817',
                'keywordName'=>'fossum', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1818',
                'keywordName'=>'quantization',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1819',
                'keywordName'=>'lossy ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1820',
                'keywordName'=>'compression', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1821',
                'keywordName'=>' photographic', 
                'mainTermId' => '38',
    
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1822',
                'keywordName'=>'photographic', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1823',
                'keywordName'=>'photo',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1824',
                'keywordName'=>'yuv411',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1825',
                'keywordName'=>'frame', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1826',
                'keywordName'=>'inter', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1827',
                'keywordName'=>'yiq',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1828',
                'keywordName'=>'westworld',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1829',
                'keywordName'=>'pixellate', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1830',
                'keywordName'=>'mos ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1831',
                'keywordName'=>'technology', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1832',
                'keywordName'=>'signal ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1833',
                'keywordName'=>'video ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1834',
                'keywordName'=>'audio ', 
                'mainTermId' => '38',
    
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1835',
                'keywordName'=>' conversion', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1836',
                'keywordName'=>'motion ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1837',
                'keywordName'=>' estimation', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1838',
                'keywordName'=>'definition ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1839',
                'keywordName'=>'high', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1840',
                'keywordName'=>' television', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1841',
                'keywordName'=>'space ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1842',
                'keywordName'=>' foundation', 
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1843',
                'keywordName'=>'highpass ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1844',
                'keywordName'=>'filter', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1845',
                'keywordName'=>' sensor', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1846',
                'keywordName'=>'color ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1847',
                'keywordName'=>' correction', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1848',
                'keywordName'=>' formats', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1849',
                'keywordName'=>'file ', 
                'mainTermId' => '38',
    
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1850',
                'keywordName'=>'human ',
                'mainTermId' => '38',
 ]);
DB::table('dictionaries')->insert([
    
                'keywordId'=>'1851',
                'keywordName'=>'visual ',
                'mainTermId' => '38',
    
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1852',
                'keywordName'=>' analysis', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1853',
                'keywordName'=>'3d ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1854',
                'keywordName'=>'reconstruction', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1855',
                'keywordName'=>' vision', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1856',
                'keywordName'=>'machine ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1857',
                'keywordName'=>'motion ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1858',
                'keywordName'=>' estimation', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1859',
                'keywordName'=>'artificial ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1860',
                'keywordName'=>' intelligence', 
                'mainTermId' => '38',
    
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1861',
                'keywordName'=>'algorithms',
                'mainTermId' => '38',
     ]);
    
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1862',
                'keywordName'=>'three', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1863',
                'keywordName'=>'dimensional', 
                'mainTermId' => '38',
 ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1864',
                'keywordName'=>'video ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1865',
                'keywordName'=>' tracking', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1866',
                'keywordName'=>'onject ',
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1867',
                'keywordName'=>' recognition',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1868',
                'keywordName'=>'morphing',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1869',
                'keywordName'=>'3d pose ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1870',
                'keywordName'=>' estimation', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1871',
                'keywordName'=>'visual ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1872',
                'keywordName'=>'servoing', 
                'mainTermId' => '38',
     ]);
    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1873',
                'keywordName'=>'image ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1874',
                'keywordName'=>'restoraction', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1875',
                'keywordName'=>'feature',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1876',
                'keywordName'=>'feature',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1877',
                'keywordName'=>'optics',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1878',
                'keywordName'=>' detection', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1879',
                'keywordName'=>'edge ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1880',
                'keywordName'=>'flow', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1881',
                'keywordName'=>'optical ', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1882',
                'keywordName'=>'scale ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1883',
                'keywordName'=>'space', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1884',
                'keywordName'=>'optimization',
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1885',
                'keywordName'=>'camera ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1886',
                'keywordName'=>' resectioning', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1887',
                'keywordName'=>'multiple ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1888',
                'keywordName'=>' images', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1889',
                'keywordName'=>'graph ', 
                'mainTermId' => '38',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1890',
                'keywordName'=> ' cuts', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1891',
                'keywordName'=>'segmentation', 
                'mainTermId' => '38',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1892',
                'keywordName'=>'computer ',
                'mainTermId' => '16',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1893',
                'keywordName'=>' graphics',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1894',
                'keywordName'=>'image', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1895',
                'keywordName'=>'processing', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1896',
                'keywordName'=>'vision', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1897',
                'keywordName'=> '3d', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1898',
                'keywordName'=> 'model', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1899',
                'keywordName'=>'video', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1900',
                'keywordName'=>'recognition', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1901',
                'keywordName'=>'pattern ', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1902',
                'keywordName'=>'medical ',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1903',
                'keywordName'=>'redering',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1904',
                'keywordName'=>'visualization',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1905',
                'keywordName'=> 'real-time ', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1906',
                'keywordName'=>'analysis', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1907',
                'keywordName'=>'analytics', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1908',
                'keywordName'=>'visual', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1909',
                'keywordName'=>'geometric',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1910',
                'keywordName'=>'modeling',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1911',
                'keywordName'=>'printing', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1912',
                'keywordName'=>'reality', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1913',
                'keywordName'=>'virtual ', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1914',
                'keywordName'=>'head-mounted ', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1915',
                'keywordName'=>'display', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1916',
                'keywordName'=>'positional ', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1917',
                'keywordName'=>'tracking', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1918',
                'keywordName'=>'augmented ',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1919',
                'keywordName'=>'drawing',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1920',
                'keywordName'=>'symbol',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1921',
                'keywordName'=>'picture',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1922',
                'keywordName'=>'color',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1923',
                'keywordName'=>'chart',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1924',
                'keywordName'=>'map',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1925',
                'keywordName'=>'painting',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1926',
                'keywordName'=>'multimedia',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1927',
                'keywordName'=>'photograph',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1928',
                'keywordName'=>'expressed',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1929',
                'keywordName'=>'diagram',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1930',
                'keywordName'=>'graph',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1931',
                'keywordName'=>'imagery',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1932',
                'keywordName'=>'paper',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1933',
                'keywordName'=>'typography',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1934',
                'keywordName'=>'table',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1935',
                'keywordName'=>'exhibit',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1936',
                'keywordName'=>'logo',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1937',
                'keywordName'=>'detailed',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1938',
                'keywordName'=>'art',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1939',
                'keywordName'=>'concept',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1940',
                'keywordName'=>'web',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1941',
                'keywordName'=>'poster',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1942',
                'keywordName'=>'software',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1943',
                'keywordName'=>'sign',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1944',
                'keywordName'=>'charactor',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1945',
                'keywordName'=>'charactor',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1946',
                'keywordName'=>'woodcut',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1947',
                'keywordName'=>'engraving',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1948',
                'keywordName'=>'etching',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1949',
                'keywordName'=>'intaglio',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1950',
                'keywordName'=>'printmaking',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1951',
                'keywordName'=>'shading',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1952',
                'keywordName'=>'hue',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1953',
                'keywordName'=>'representation',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1954',
                'keywordName'=>'highlights',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1955',
                'keywordName'=>'biographical',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1956',
                'keywordName'=>'artwork',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1957',
                'keywordName'=>'update',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1958',
                'keywordName'=> 'background', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1959',
                'keywordName'=>'categories',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1960',
                'keywordName'=>'overview', 
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1961',
                'keywordName'=>'presents',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1962',
                'keywordName'=>'descriptions',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1963',
                'keywordName'=>'preview',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1964',
                'keywordName'=>'3c',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1965',
                'keywordName'=>'1c',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1966',
                'keywordName'=>'brutal',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1967',
                'keywordName'=>'schematic',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1968',
                'keywordName'=>'decals',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1969',
                'keywordName'=>'documentary',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1970',
                'keywordName'=>'charts',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1971',
                'keywordName'=>'themes',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1972',
                'keywordName'=>'article',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1973',
                'keywordName'=>'sketches',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1974',
                'keywordName'=>'edits',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1975',
                'keywordName'=>'scenes',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1976',
                'keywordName'=>'fiction',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1977',
                'keywordName'=>'pixelated',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1978',
                'keywordName'=>'collaged',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1979',
                'keywordName'=>'contrasty',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1980',
                'keywordName'=>'mosaic',
                'mainTermId' => '16',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1981',
                'keywordName'=>'photoshop',
                'mainTermId' => '16',
                ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1982',
                'keywordName'=>'animation',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1982',
                'keywordName'=>'video',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1983',
                'keywordName'=>'media',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1984',
                'keywordName'=>'interactive',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1985',
                'keywordName'=>'online',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1986',
                'keywordName'=>'entertainment',
                'mainTermId' => '18',
                 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1987',
                'keywordName'=>'information',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1988',
                'keywordName'=>'multimedia ', 
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1989',
                'keywordName'=>' system', 
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1990',
                'keywordName'=>'cd-rom', 
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1991',
                'keywordName'=>'content',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1992',
                'keywordName'=>'hypermedia',
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1993',
                'keywordName'=>'photography',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1994',
                'keywordName'=>'audiovisual',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1995',
                'keywordName'=>'digital',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1996',
                'keywordName'=>'audio',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1997',
                'keywordName'=>'computing',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1998',
                'keywordName'=>'graphics',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'1999',
                'keywordName'=>'desktop',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2000',
                'keywordName'=>'web',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2001',
                'keywordName'=>'wireless',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2002',
                'keywordName'=>'visualization',
                'mainTermId' => '18',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2003',
                'keywordName'=>'messaging',
                'mainTermId' => '18',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2004',
                'keywordName'=>'videoconferncing',
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2005',
                'keywordName'=>'internet',
                'mainTermId' => '18',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2006',
                'keywordName'=>'telephony',
                'mainTermId' => '18',
                  ]);   
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2007',
                'keywordName'=>'networked',
                'mainTermId' => '18',
             ]);        
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2008',
                'keywordName'=>'portable',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2009',
                'keywordName'=>'editing',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2010',
                'keywordName'=>'mobile',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2011',
                'keywordName'=>'graphical',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2012',
                'keywordName'=>'multi-media', 
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2013',
                'keywordName'=>'advertising',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2014',
                'keywordName'=>'education',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2015',
                'keywordName'=>'edutainment',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2016',
                'keywordName'=>'research',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2017',
                'keywordName'=>'variety',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2018',
                'keywordName'=>'transmission',
                'mainTermId' => '18',
                  ]);   
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2019',
                'keywordName'=>'office',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2020',
                'keywordName'=>'word',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2021',
                'keywordName'=>'innovations',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2021',
                'keywordName'=>'capabilities',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2022',
                'keywordName'=>'broadband',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2023',
                'keywordName'=>'systems',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2024',
                'keywordName'=>'instructional',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2025',
                'keywordName'=>'xbox',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2026',
                'keywordName'=>'sony',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2027',
                'keywordName'=>'showcase',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2028',
                'keywordName'=>'programmers',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2029',
                'keywordName'=>'videogame',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2030',
                'keywordName'=>'user',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2031',
                'keywordName'=>'web-based', 
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2032',
                'keywordName'=>'hypermedia ', 
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2033',
                'keywordName'=>'state-of-the-art', 
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2034',
                'keywordName'=>'clips',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2035',
                'keywordName'=>'mms',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2036',
                'keywordName'=>'playback',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2037',
                'keywordName'=>'smartphone',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2038',
                'keywordName'=>'handset',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2039',
                'keywordName'=>'communication',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2040',
                'keywordName'=>'touchscreen',
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2041',
                'keywordName'=>'touchscreen',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2042',
                'keywordName'=>'text',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2043',
                'keywordName'=>'footage',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2044',
                'keywordName'=>'software', 
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2045',
                'keywordName'=>'hardware',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2046',
                'keywordName'=>'sound',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2047',
                'keywordName'=>'stage',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2048',
                'keywordName'=>'automation',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2049',
                'keywordName'=>'ict',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2050',
                'keywordName'=>'integrates',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2051',
                'keywordName'=>'micro',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2052',
                'keywordName'=>'innovative',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2053',
                'keywordName'=>'creative',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2054',
                'keywordName'=>'gaming',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2055',
                'keywordName'=>'functionality',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2056',
                'keywordName'=>'rom',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2057',
                'keywordName'=>'handheld',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2058',
                'keywordName'=>'applications',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2059',
                'keywordName'=>'programming',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2060',
                'keywordName'=>'server',
                'mainTermId' => '18',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2061',
                'keywordName'=>'interface',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2062',
                'keywordName'=>'workstations',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2063',
                'keywordName'=>'tools',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2064',
                'keywordName'=>'mp3',
                'mainTermId' => '18',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2065',
                'keywordName'=>'modulart',
                'mainTermId' => '18',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2066',
                'keywordName'=>'ipod',
                'mainTermId' => '18',
     ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2067',
                'keywordName'=>'algorithm',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2068',
                'keywordName'=>'computer ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2069',
                'keywordName'=>'engineering', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2070',
                'keywordName'=> ' intelligence', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2071',
                'keywordName'=>'artificial ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2072',
                'keywordName'=>'code',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2073',
                'keywordName'=>'automata ',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2074',
                'keywordName'=>' theory',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2075',
                'keywordName'=>'problem', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2076',
                'keywordName'=>'computational ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2077',
                'keywordName'=>'software', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2078',
                'keywordName'=>' learning ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2079',
                'keywordName'=>'models ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2080',
                'keywordName'=>'logic',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2081',
                'keywordName'=>'mechanical ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2082',
                'keywordName'=>'calculator', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2083',
                'keywordName'=>'information',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2084',
                'keywordName'=>'abstraction',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2085',
                'keywordName'=>'algorithmics',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2086',
                'keywordName'=>'machine',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2087',
                'keywordName'=>'computing',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2088',
                'keywordName'=>'eniac',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2089',
                'keywordName'=>'computation',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2090',
                'keywordName'=>'arithmometer',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2091',
                'keywordName'=>'control flow', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2092',
                'keywordName'=> 'inter-process ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2093',
                'keywordName'=>'transistor',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2094',
                'keywordName'=>'mosfet',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2095',
                'keywordName'=>'complex ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2096',
                'keywordName'=>'automated ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2097',
                'keywordName'=>' planning ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2098',
                'keywordName'=>'scheduling', 
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2099',
                'keywordName'=>' accessibility', 
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2100',
                'keywordName'=>'informatics',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2101',
                'keywordName'=>'difference ',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2102',
                'keywordName'=>'physics',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2103',
                'keywordName'=>'tabulating',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2104',
                'keywordName'=>'machine',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2105',
                'keywordName'=>'mathematical ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2106',
                'keywordName'=>'logic', 
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2107',
                'keywordName'=>'cryptography',
                'mainTermId' => '15',
                ]);     
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2108',
                'keywordName'=>'multi-disciplinary', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2109',
                'keywordName'=>'berry',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2110',
                'keywordName'=>'atanasoff',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2111',
                'keywordName'=>'algebra',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2112',
                'keywordName'=>'field-effect ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2113',
                'keywordName'=>'transistor', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2114',
                'keywordName'=>'point-contact ', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2115',
                'keywordName'=>'transistorized ', 
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2116',
                'keywordName'=>'probability',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2117',
                'keywordName'=>'statistics',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2118',
                'keywordName'=>'revolution',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2119',
                'keywordName'=>'salvic language', 
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2120',
                'keywordName'=>'hungarian',
                'mainTermId' => '15',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2121',
                'keywordName'=>'cybernetics',
                'mainTermId' => '15',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2122',
                'keywordName'=>'neurophysiology',
                'mainTermId' => '15',
                  ]);   
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2123',
                'keywordName'=>'robotics',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2124',
                'keywordName'=>'simulation',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2125',
                'keywordName'=>'proceedings',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2126',
                'keywordName'=>'reasoning',
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2127',
                'keywordName'=>'deductive ',
                'mainTermId' => '15',
                  ]);   
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2128',
                'keywordName'=>'natural ', 
                'mainTermId' => '15',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2129',
                'keywordName'=>' science', 
                'mainTermId' => '15',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2130',
                'keywordName'=>'symbolic',
                'mainTermId' => '15',
                 ]);    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2131',
                'keywordName'=>'error detection', 
                'mainTermId' => '15',
                   ]);  
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2132',
                'keywordName'=>'correction', 
                'mainTermId' => '15',
               ]);      
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2133',
                'keywordName'=>'linear ',
                'mainTermId' => '15',
               ]);      
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2134',
                'keywordName'=>'network ',
                'mainTermId' => '15',
              ]);       
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2135',
                'keywordName'=>'coding',
                'mainTermId' => '15',
              ]);       
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2136',
                'keywordName'=>'security',
                'mainTermId' => '15',
                  ]);   
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2137',
                'keywordName'=>'database ',
                'mainTermId' => '15',
               ]);      
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2138',
                'keywordName'=>'query ',
                'mainTermId' => '15',
              ]);       
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2139',
                'keywordName'=>'scientific ',
                'mainTermId' => '15',
              ]);       
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2140',
                'keywordName'=>'batch ',
                'mainTermId' => '15',
           ]);          
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2141',
                'keywordName'=>'paper ',
                'mainTermId' => '15',
            ]);         
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2142',
                'keywordName'=>'algebric ',
                'mainTermId' => '15',
       ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2143',
                'keywordName'=>'digital ',
                'mainTermId' => '13',
          ]);           
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2144',
                'keywordName'=>'image',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2145',
                'keywordName'=>'algorithm',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2146',
                'keywordName'=>'noise',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2147',
                'keywordName'=>'distortion',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2149',
                'keywordName'=>'mosfet',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2150',
                'keywordName'=>'wirephoto',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2151',
                'keywordName'=>'videophone',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2152',
                'keywordName'=>'semiconductor',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2153',
                'keywordName'=>'metal-oxide-semiconductor', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2154',
                'keywordName'=>'digital ', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2155',
                'keywordName'=>' processing', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2156',
                'keywordName'=>'signal ', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2157',
                'keywordName'=>'analog ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2158',
                'keywordName'=>'compression',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2159',
                'keywordName'=>'multidimensional ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2160',
                'keywordName'=>'systems',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2161',
                'keywordName'=>'encoding',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2162',
                'keywordName'=>'active-pixel sensor', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2163',
                'keywordName'=>'multiplexing',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2164',
                'keywordName'=>'signaling',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2165',
                'keywordName'=>'luminance',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2166',
                'keywordName'=>'yuv444',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2167',
                'keywordName'=>'yuv441',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2168',
                'keywordName'=>'quantization',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2169',
                'keywordName'=>'lossy ', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2170',
                'keywordName'=>'compression', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2171',
                'keywordName'=>'signal ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2172',
                'keywordName'=>'yiq',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2173',
                'keywordName'=>'yuv',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2174',
                'keywordName'=>'pixellate',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2175',
                'keywordName'=>'processor',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2176',
                'keywordName'=>'audio ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2177',
                'keywordName'=>'estimation',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2178',
                'keywordName'=>'compensation',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2179',
                'keywordName'=>'entropy ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2180',
                'keywordName'=>'encoding',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2181',
                'keywordName'=>'vector',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2182',
                'keywordName'=>'space ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2183',
                'keywordName'=>'highpass ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2184',
                'keywordName'=>'transformations',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2185',
                'keywordName'=>' equation', 
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2186',
                'keywordName'=>'homogeneous ',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2187',
                'keywordName'=>'sensor',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2188',
                'keywordName'=>'correction',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2189',
                'keywordName'=>'formats',
                'mainTermId' => '13',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2190',
                'keywordName'=>'affine ',
                'mainTermId' => '13',
 ]);
     
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2191',
                'keywordName'=>'calculations', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2192',
                'keywordName'=>'arithmetic ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2193',
                'keywordName'=>'complex', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2194',
                'keywordName'=>'problems', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2195',
                'keywordName'=>'mathematical', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2196',
                'keywordName'=>'operations',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2197',
                'keywordName'=>'devices',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2198',
                'keywordName'=>'microelectronic ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2199',
                'keywordName'=>'revolution', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2200',
                'keywordName'=>' development', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2201',
                'keywordName'=>'subsequent ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2202',
                'keywordName'=>' equation', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2203',
                'keywordName'=>'algebraic', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2204',
                'keywordName'=>'complex',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2205',
                'keywordName'=>'variables',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2206',
                'keywordName'=>'analysis',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2207',
                'keywordName'=>'fact',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2208',
                'keywordName'=>'digit',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2209',
                'keywordName'=>'float',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2210',
                'keywordName'=>'representation',                               
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2211',
                'keywordName'=>'fixed ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2212',
                'keywordName'=>'floating ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2213',
                'keywordName'=>'analog',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2214',
                'keywordName'=>'digital',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2215',
                'keywordName'=>'tool',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2216',
                'keywordName'=>'quantities', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2217',
                'keywordName'=>'measurable ', 
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2218',
                'keywordName'=>'time',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2219',
                'keywordName'=>'temperature',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2220',
                'keywordName'=>'speed',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2221',
                'keywordName'=>'numbers',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2222',
                'keywordName'=>'numeral',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2223',
                'keywordName'=>'letters',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2224',
                'keywordName'=>'symbols',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2225',
                'keywordName'=>'accuracy',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2226',
                'keywordName'=>'efficiency',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2227',
                'keywordName'=>'exact',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2228',
                'keywordName'=>'procedure',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2229',
                'keywordName'=>'manipulation',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2230',
                'keywordName'=>'stability',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2231',
                'keywordName'=>'formulation',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2232',
                'keywordName'=>'construction',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2233',
                'keywordName'=>'implementation',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2234',
                'keywordName'=>'validation',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2235',
                'keywordName'=>'scientists',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2236',
                'keywordName'=>'engineers',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2237',
                'keywordName'=>'algorithms',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2238',
                'keywordName'=>'vector ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2239',
                'keywordName'=>'parallel ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2240',
                'keywordName'=>'sophisticated ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2241',
                'keywordName'=>'add',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2242',
                'keywordName'=>'subtract',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2243',
                'keywordName'=>'differentiation',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2244',
                'keywordName'=>'parameter',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2245',
                'keywordName'=>'finite ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2246',
                'keywordName'=>'magnitude',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2247',
                'keywordName'=>'absolute ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2248',
                'keywordName'=>'relative ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2249',
                'keywordName'=>'mathematical ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2250',
                'keywordName'=>'value',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2251',
                'keywordName'=>'error',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2252',
                'keywordName'=>'average ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2253',
                'keywordName'=>'mean ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2254',
                'keywordName'=>'theorem',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2255',
                'keywordName'=>'interval',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2256',
                'keywordName'=>'general ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2257',
                'keywordName'=>'computer',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2258',
                'keywordName'=>'purpose ',
                'mainTermId' => '19',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2259',
                'keywordName'=>'model',
                'mainTermId' => '19',
  ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2260',
                'keywordName'=>'interactive ',
                'mainTermId' => '19',
     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2261',
                'keywordName'=>'tech',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2262',
                'keywordName'=>'technicology',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2263',
                'keywordName'=>'technological',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2264',
                'keywordName'=>'high-tech',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2265',
                'keywordName'=>'low-tech',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2266',
                'keywordName'=>'technologist',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2267',
                'keywordName'=>'robotics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2268',
                'keywordName'=>'techie',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2269',
                'keywordName'=>'electronics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2270',
                'keywordName'=>'cyberphobia',
                'mainTermId' => '14',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2271',
                'keywordName'=>'infotech',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2272',
                'keywordName'=>'digital',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2273',
                'keywordName'=>'telecommunication',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2274',
                'keywordName'=>'ict',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2275',
                'keywordName'=>'technologically',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2276',
                'keywordName'=>'antitecnology',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2277',
                'keywordName'=>'cyberpunk',
                'mainTermId' => '14',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2278',
                'keywordName'=>'rocketry',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2279',
                'keywordName'=>'animatronics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'22',
               'keywordName'=>'technetronic',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2281',
               'keywordName'=>'technoid',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2282',
                'keywordName'=>'ctc',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2283',
                'keywordName'=>'voip',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2284',
                'keywordName'=>'nucleonics',
                'mainTermId' => '14',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2285',
                'keywordName'=>'institute',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2286',
                'keywordName'=>'telephony',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2287',
                'keywordName'=>'technol',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2288',
                'keywordName'=>'bmt',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2289',
                'keywordName'=>'advanced',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2290',
                'keywordName'=>'technism',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2291',
                'keywordName'=>'technomania',
                'mainTermId' => '14',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2292',
                'keywordName'=>'ultrasonic',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2293',
                'keywordName'=>'telemetry',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2294',
                'keywordName'=>'communication',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2295',
                'keywordName'=>'telematics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2296',
                'keywordName'=>'telematics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2297',
                'keywordName'=>'electronology',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2298',
                'keywordName'=>'modern',
                'mainTermId' => '14',
                     ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2299',
                'keywordName'=>'edtech',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2300',
                'keywordName'=>'computery',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2301',
                'keywordName'=>'4G',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2302',
                'keywordName'=>'platform',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2303',
                'keywordName'=>'upgrade',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2304',
                'keywordName'=>'radio',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2305',
                'keywordName'=>'3G',
                'mainTermId' => '14',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2306',
                'keywordName'=>'second-generation', 
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2307',
                'keywordName'=>'third-generation', 
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2308',
                'keywordName'=>'microelectronics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2309',
                'keywordName'=>'technician',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2310',
                'keywordName'=>'wireless',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2311',
                'keywordName'=>'bluetooth',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2312',
                'keywordName'=>'space-age', 
                'mainTermId' => '14',
 ]);
                    
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2313',
                'keywordName'=>'expo',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2314',
                'keywordName'=>'televisionary',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2315',
                'keywordName'=>'sonics',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2316',
                'keywordName'=>'MP3',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2317',
                'keywordName'=>'HFT',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2318',
                'keywordName'=>'intranet',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2319',
                'keywordName'=>'videoconference',
                'mainTermId' => '14',
                    ]); 
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2320',
                'keywordName'=>'e-lancing', 
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2321',
                'keywordName'=>'GPRS',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2322',
                'keywordName'=>'2G',
                'mainTermId' => '14',
 ]);
    DB::table('dictionaries')->insert([
    
                'keywordId'=>'2323',
                'keywordName'=>'analog',
                'mainTermId' => '14',
                ]);
    
        
  
  }
}