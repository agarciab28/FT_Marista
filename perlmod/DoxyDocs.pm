$doxydocs=
{
  classes => [
  ],
  namespaces => [
    {
      name => 'Laravel',
      classes => [
      ],
      namespaces => [
      ],
      brief => {
        doc => [
          {
            type => 'parbreak'
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' - A PHP Framework For Web Artisans. '
          }
        ]
      },
      detailed => {
        doc => [
          {
            type => 'parbreak'
          },
          {
            author => [
              {
                type => 'text',
                content => 'Taylor Otwell '
              },
              {
                type => 'url',
                content => 'taylor@laravel.com'
              },
              {
                type => 'text',
                content => ' '
              }
            ]
          }
        ]
      }
    }
  ],
  files => [
    {
      name => 'readme.md',
      includes => [
      ],
      included_by => [
      ],
      brief => {},
      detailed => {}
    },
    {
      name => 'server.php',
      includes => [
      ],
      included_by => [
      ],
      variables => {
        members => [
          {
            kind => 'variable',
            name => '$uri',
            virtualness => 'non_virtual',
            protection => 'public',
            static => 'no',
            brief => {},
            detailed => {},
            initializer => '= urldecode(
    parse_url($_SERVER[\'REQUEST_URI\'], PHP_URL_PATH)
)'
          },
          {
            kind => 'variable',
            name => 'if',
            virtualness => 'non_virtual',
            protection => 'public',
            static => 'no',
            brief => {},
            detailed => {},
            arguments => '( $uri !==\'/\' &&file_exists(__DIR__.\'/public\'. $uri))'
          }
        ]
      },
      brief => {},
      detailed => {}
    }
  ],
  groups => [
  ],
  pages => [
    {
      name => 'md_AppConsultas_readme',
      title4 => 'readme',
      detailed => {
        doc => [
          {
            type => 'parbreak'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => '    '
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'About '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' takes the pain out of development by easing common tasks used in many web projects, such as:'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'list',
            style => 'itemized',
            content => [
              [
                {
                  type => 'text',
                  content => 'Simple, fast routing engine.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Powerful dependency injection container.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Multiple back-ends for session and cache storage.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Expressive, intuitive database ORM.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Database agnostic schema migrations.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Robust background job processing.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Real-time event broadcasting.'
                }
              ]
            ]
          },
          {
            type => 'parbreak'
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' is accessible, powerful, and provides tools required for large, robust applications.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'Learning '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'If you don\'t feel like reading, Laracasts can help. Laracasts contains over 1100 video tutorials on a range of topics including '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ', modern PHP, unit testing, and JavaScript. Boost you and your team\'s skills by digging into our comprehensive video library.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' Sponsors'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'We would like to extend our thanks to the following sponsors for funding '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' development. If you are interested in becoming a sponsor, please visit the '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' Patreon page.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'list',
            style => 'itemized',
            content => [
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Vehikl'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Tighten Co.'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Kirschbaum Development Group'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => '64 Robots'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Cubet Techno Labs'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Cyber-Duck'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'British Software Development'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'Webdock, Fast VPS Hosting'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'yes'
                },
                {
                  type => 'text',
                  content => 'DevSquad'
                },
                {
                  type => 'style',
                  style => 'bold',
                  enable => 'no'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'UserInsights'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Fragrantica'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'SOFTonSOFA'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'User10'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Soumettre.fr'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'CodeBrisk'
                }
              ],
              [
                {
                  type => 'text',
                  content => '1Forge'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'TECPRESSO'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Runtime Converter'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'WebL\'Agence'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Invoice Ninja'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'iMi digital'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Earthlink'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Steadfast Collective'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'We Are The Robots Inc.'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Understand.io'
                }
              ],
              [
                {
                  type => 'text',
                  content => 'Abdel Elrafa'
                }
              ]
            ]
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'Contributing'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'Thank you for considering contributing to the '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' framework! The contribution guide can be found in the Laravel documentation.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'Security Vulnerabilities'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'If you discover a security vulnerability within '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ', please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'License'
          },
          {
            type => 'parbreak'
          },
          {
            type => 'text',
            content => 'The '
          },
          {
            type => 'url',
            link => 'd4/dee/a00008',
            content => 'Laravel'
          },
          {
            type => 'text',
            content => ' framework is open-source software licensed under the MIT license. '
          }
        ]
      }
    }
  ]
};
1;
