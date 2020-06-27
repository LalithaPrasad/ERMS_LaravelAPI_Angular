import { TestBed } from '@angular/core/testing';

import { EmpdataResolveService } from './empdata-resolve.service';

describe('EmpdataResolveService', () => {
  let service: EmpdataResolveService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(EmpdataResolveService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
